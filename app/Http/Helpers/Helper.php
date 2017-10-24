    <?php
    class Helper{

        public static function getTranslatedSlugRu($text)
        {
            $cyr2lat_replacements = array (
                "А" => "a","Ә" => "a", "Б" => "b","В" => "v","Г" => "g","Ғ" => "gh","Д" => "d",
                "Е" => "e","Ё" => "yo","Ж" => "dg","З" => "z","И" => "i","І" => "i",
                "Й" => "y","К" => "k","Қ" => "q","Һ" => "q","Л" => "l","М" => "m","Н" => "n","Ң" => "nh",
                "О" => "o","Ө" => "o","П" => "p","Р" => "r","С" => "s","Т" => "t",
                "У" => "u","Ұ" => "u","Ү" => "u","Ф" => "f","Х" => "kh","Ц" => "ts","Ч" => "ch",
                "Ш" => "sh","Щ" => "csh","Ъ" => "","Ы" => "y","Ь" => "",
                "Э" => "e","Ю" => "yu","Я" => "ya","?" => "",

                "а" => "a","ә" => "a","б" => "b","в" => "v","г" => "g","ғ" => "gh","д" => "d",
                "е" => "e","ё" => "yo","ж" => "dg","з" => "z","и" => "i","і" => "i",
                "й" => "y","к" => "k","қ" => "q","һ" => "q","л" => "l","м" => "m","н" => "n","ң" => "nh",
                "о" => "o","ө" => "o","п" => "p","р" => "r","с" => "s","т" => "t",
                "у" => "u","ұ" => "u","ү" => "u","ф" => "f","х" => "kh","ц" => "ts","ч" => "ch",
                "ш" => "sh","щ" => "sch","ъ" => "","ы" => "y","ь" => "",
                "э" => "e","ю" => "yu","я" => "ya",
                "(" => "", ")" => "", "," => "", "." => "",

                "-" => "-","%" => "-"," " => "-", "+" => "", "®" => "", "«" => "", "»" => "", '"' => "", "`" => "", "&" => "","/" => "-"
            );

            $str = strtr (trim($text),$cyr2lat_replacements);
            $str =  substr($str, 0, 100);
            return $str;
        }

        public static function setSessionLang($lang){
            $request = Request::segments();
            $locale = count($request) > 0 ? $request[0] : '';
            $lang_list = ['ru','kk','en'];
            $url_path = Request::path();
            if (in_array($locale, $lang_list))
            {
                $url_path = str_replace($locale ."/","",$url_path);
                $url_path = str_replace($locale,"",$url_path);
            }
            $lang = URL::to('/') . '/'  .$lang .'/'.$url_path;
            return $lang;
        }

        public static function getTestTitle($test_category_id)
        {
            return App\Models\Test::where('category_id',$test_category_id)->get()->toArray();
        }

        public static function getMonthName($number) {
            $lang = App::getLocale();

            if($lang == 'ru'){
                $monthAr = array(
                    1 => array('Январь', 'Января'),
                    2 => array('Февраль', 'Февраля'),
                    3 => array('Март', 'Марта'),
                    4 => array('Апрель', 'Апреля'),
                    5 => array('Май', 'Мая'),
                    6 => array('Июнь', 'Июня'),
                    7 => array('Июль', 'Июля'),
                    8 => array('Август', 'Августа'),
                    9 => array('Сентябрь', 'Сентября'),
                    10=> array('Октябрь', 'Октября'),
                    11=> array('Ноябрь', 'Ноября'),
                    12=> array('Декабрь', 'Декабря')
                );
            }
            else if($lang == 'kz'){
                $monthAr = array(
                    1 => array('Январь', 'Қаңтар'),
                    2 => array('Февраль', 'Ақпан'),
                    3 => array('Март', 'Наурыз'),
                    4 => array('Апрель', 'Сәуір'),
                    5 => array('Май', 'Мамыр'),
                    6 => array('Июнь', 'Маусым'),
                    7 => array('Июль', 'Шілде'),
                    8 => array('Август', 'Тамыз'),
                    9 => array('Сентябрь', 'Қыркүйек'),
                    10=> array('Октябрь', 'Қазан'),
                    11=> array('Ноябрь', 'Қараша'),
                    12=> array('Декабрь', 'Желтоқсан')
                );
            }
            else {
                $monthAr = array(
                    1 => array('Январь', 'January'),
                    2 => array('Февраль', 'February'),
                    3 => array('Март', 'March'),
                    4 => array('Апрель', 'April'),
                    5 => array('Май', 'May'),
                    6 => array('Июнь', 'June'),
                    7 => array('Июль', 'July'),
                    8 => array('Август', 'August'),
                    9 => array('Сентябрь', 'September'),
                    10=> array('Октябрь', 'October'),
                    11=> array('Ноябрь', 'November'),
                    12=> array('Декабрь', 'December')
                );
            }
            if(!isset($monthAr[(int)$number][1])){
                return '';
            }
            return $monthAr[(int)$number][1];
        }

    }