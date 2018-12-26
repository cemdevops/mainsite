<?php

namespace Drupal\csv_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;
use Drupal\taxonomy\Entity\Term;

class mapas_en_importController extends ControllerBase {

    public function import_mapoteca_en() {

        function getTidByName($value = NULL, $vid = NULL) {

            $language =  'en';
            $query = \Drupal::entityQuery('taxonomy_term');
            $query->condition('vid', $vid);
            $query->sort('weight');
            $tids = $query->execute();
            $terms = Term::loadMultiple($tids);
            foreach($terms as $term) {

                if ($term->getTranslation($language) == !NULL) {

                    if ($term->getTranslation($language)->getName() == $value) {
                        return $tid = $term->id();
                    }
                }
            }
        }
        $filePath = \Drupal::service('file_system')->realpath(file_default_scheme() . "://");
        $mapoteca = $filePath . "/dados/single-rows-mapoteca-en-2.csv";
        $h =fopen($mapoteca, "r");

        while (($data = fgetcsv($h, 100000, ";")) !== FALSE) {
            $base[] = $data;
        }
        fclose($h);
        $base = array_slice($base,0,5);
 //       kint($base);
        $head = array_shift($base);
        $divisao    = array();
        $count = 0;
        $nid   = 8290;
        foreach($base as $value) {
            $files       = explode('#', $value[6]);
            $description = explode('#', $value[5]);
            $file_entity    = array_combine($files, $description);
            if(count($files) != count($description)){
                echo "A quantidade de descrição não está igual a quantiade de arquivos: linha: " . $count;
            }{
                $file_entity = array_combine($files, $description);
            }
            $count++;
            $node = Node::load($nid);
            $nid++;
            $translated_fields = [];
            $documentos = [];
            foreach($file_entity as $file => $descricao){
                $file_source = $filePath . "/new-mapoteca-migrated-files-mari/" . $file;
                if(file_exists($file_source) && is_file($file_source)) {
                    $uri = file_unmanaged_copy($file_source, 'public://user_files/mapas_prontos/documento' . $file, FILE_EXISTS_REPLACE);
                    $files = File::Create(['uri' => $uri]);
                    $files->save();
                    $documentos[] = [
                        'target_id' => $files->id(),
                        'description' => !empty($descricao) ? $descricao : "sem descrição",
                    ];
                    $translated_fields['field_documento'] = $documentos;
                }
                if(file_exists($file_source)) {
                    $log = $filePath . '/logs/arquivos-faltantes-mapoteca.txt';
                    file_put_contents($log, "");
                    $current = file_get_contents($log);
                    $current .= "{$file}\n";
                    file_put_contents($log, $current);
                };
            }
            if(!empty($value[1])){
                $translated_fields['title'] = $value[1];
            }else{
                $translated_fields['title'] = 'SEM TITULO';
            }

            $body = [
                'value'  => $value[2],
                'format' => 'full_html',
            ];
            $translated_fields['body'] = $body;
            $translated_fields['field_ano_de_publicacao'] = $value[3];
            $translated_fields['field_documento_data_ref'] = $value[8];


            $date_format = explode('-',$value[9]);
            $expression = '%s-%s-%s';
            $date = [
                'value' => sprintf($expression,$date_format[2],$date_format[1],$date_format[0]),
            ];
            $translated_fields['field_documento_data_lancamento'] = $date;

            $file_source_img = $filePath . "/new-mapoteca-migrated-files-mari/" . $value[7];
            if(file_exists($file_source_img) && is_file($file_source_img)) {
                $uri = file_unmanaged_copy($file_source_img, 'public://user_files/mapas_prontos/imagens' . $value[7], FILE_EXISTS_REPLACE);
                $files = File::Create(['uri' => $uri]);
                $files->save();
                $imagem_capa = [
                    'target_id' => $files->id(),
                    'alt' => 'Imagem Capa do Livro',
                    'title' => 'Imagem Capa do Livro'
                ];
                $translated_fields['field_imagem_mapas'] = $imagem_capa;
            }
            $divisoes = explode('#', $value[4]);

            foreach($divisoes as $value){
                $divisao[] = getTidByName($value, 'divisao_territorial_do_brasil');
            }

            $translated_fields['field_documento_divisao']  = $divisao;
            $node->addTranslation('en', $translated_fields)->save();
        }
        drupal_set_message("foram registrados " . $count . " nodes!\n");
        return [
            '#type' => 'markup',
            '#markup' => $this->t('Importação realizada com sucesso!'),
        ];

    }
  
  }












