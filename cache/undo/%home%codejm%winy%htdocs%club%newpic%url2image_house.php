Vim�UnDo� M�ًN�V�.x�Ҡ=p�d±HCϠѽzcY��   4                 A       A   A   A    SV+�    _�                     F        ����                                                                                                                                                                                                                                                                                                                            F          I          V       SV_     �   H   J          $n -> data2img();�   G   I          $n -> img2data();�   F   H          6$n -> getdir($dir.$dirname.'/'.$picname.'.'.$pictype);�   E   G          $n = new imgdata;5�_�                    D        ����                                                                                                                                                                                                                                                                                                                            F          I          V       SVa     �   D   F   y       �   D   F   x    5�_�                    E        ����                                                                                                                                                                                                                                                                                                                            G          J          V       SVx     �   D   E          	error('')5�_�                    E        ����                                                                                                                                                                                                                                                                                                                            N           Q           V        SV     �   E   J   x    �   E   F   x    5�_�                    F       ����                                                                                                                                                                                                                                                                                                                            R           U           V        SV�     �   H   J          	    exit;�   G   I              echo  json_encode($arr);�   F   H          2    $arr = array('result'=>'error','info'=>$info);�   E   G          <    header('Content-Type: application/json; charset=utf-8');5�_�                    G       ����                                                                                                                                                                                                                                                                                                                            R           U           V        SV�     �   F   H   |      .$arr = array('result'=>'error','info'=>$info);5�_�                    G       ����                                                                                                                                                                                                                                                                                                                            R           U           V        SV�     �   F   H   |      )$arr = array('result'=>'','info'=>$info);5�_�      	              G   *    ����                                                                                                                                                                                                                                                                                                                            R           U           V        SV�     �   F   H   |      0$arr = array('result'=>'success','info'=>$info);5�_�      
           	   G   *    ����                                                                                                                                                                                                                                                                                                                            R           U           V        SV�     �   F   H   |      ,$arr = array('result'=>'success','info'=>$);5�_�   	              
   E        ����                                                                                                                                                                                                                                                                                                                            R           U           V        SV�     �   E   G   |    5�_�   
                 E        ����                                                                                                                                                                                                                                                                                                                            S           V           V        SV�    �   E   G   }    5�_�                    F        ����                                                                                                                                                                                                                                                                                                                            T           W           V        SV�     �   E   G   ~      $img_url = ""�   D   G   ~           �   E   G   ~       5�_�                    F   ,    ����                                                                                                                                                                                                                                                                                                                            T           W           V        SV     �   E   G   ~      ,$img_url = "http://pic.qingdaonews.com/cwb/"5�_�                    F   ,    ����                                                                                                                                                                                                                                                                                                                            T           W           V        SV     �   E   G   ~      -$img_url = "http://pic.qingdaonews.com/cwb/".5�_�                    F       ����                                                                                                                                                                                                                                                                                                                            T           W           V        SV     �   E   G   ~      ,$img_url = "http://pic.qingdaonews.com/cwb/"�   F   G   ~    5�_�                    F   ,    ����                                                                                                                                                                                                                                                                                                                            T           W           V        SV     �   E   G   ~      ,$img_url = 'http://pic.qingdaonews.com/cwb/'5�_�                    F   5    ����                                                                                                                                                                                                                                                                                                                            T           W           V        SV)     �   E   G   ~      5$img_url = 'http://pic.qingdaonews.com/cwb/'.$dirname5�_�                    F   9    ����                                                                                                                                                                                                                                                                                                                            T           W           V        SV-     �   E   G   ~      9$img_url = 'http://pic.qingdaonews.com/cwb/'.$dirname.'/'5�_�                    F   F    ����                                                                                                                                                                                                                                                                                                                            T           W           V        SV3     �   E   G   ~      F$img_url = 'http://pic.qingdaonews.com/cwb/'.$dirname.'/'.$picname.'.'5�_�                    G        ����                                                                                                                                                                                                                                                                                                                            T           W           V        SV9     �   F   G           5�_�                    F        ����                                                                                                                                                                                                                                                                                                                            S           V           V        SV:    �   E   G          Q$img_url = 'http://pic.qingdaonews.com/cwb/'.$dirname.'/'.$picname.'.'.$pictype; 5�_�                    e        ����                                                                                                                                                                                                                                                                                                                            e          }           V        SV�    �   |   ~          }�   {   }              }�   z   |          .        return $this->imgform = $info['mime'];�   y   {                  //var_dump($info);�   x   z          $        $info=getimagesize($imgsrc);�   w   y          '    public function _imgfrom($imgsrc) {�   v   x              }�   u   w          0        //imagecreatefromstring($this->imgdata);�   t   v                  //echo $this->imgform;�   s   u                  echo $this->imgdata;�   r   t          0        //header("content-type:$this->imgform");�   q   s          +        header("Content-type: image/jpeg");�   p   r          R        header("Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate");�   o   q               public function data2img() {�   n   p              }�   m   o          W        return $this->imgdata=fread(fopen($this->imgsrc,'rb'),filesize($this->imgsrc));�   l   n          '        $this->_imgfrom($this->imgsrc);�   k   m               public function img2data() {�   j   l              }�   i   k          !        $this->imgsrc  = $source;�   h   j          %    public function getdir($source) {�   g   i              public $imgform;�   f   h              public $imgdata;�   e   g              public $imgsrc;�   d   f          class imgdata {5�_�                    	        ����                                                                                                                                                                                                                                                                                                                            e          }           V        SV�     �   	      ~       �   	      }    5�_�                    
        ����                                                                                                                                                                                                                                                                                                                            f          ~           V        SV�    �   	             echo $url; exit; 5�_�                    
        ����                                                                                                                                                                                                                                                                                                                            f          ~           V        SV�    �   	   
          echo $url; exit;5�_�                           ����                                                                                                                                                                                                                                                                                                                                         $       v   $    SV�     �         }      $dir = '/data/scsi/cwb/';5�_�                           ����                                                                                                                                                                                                                                                                                                                                         $       v   $    SV�     �         }      $dir = '/data/scsi//';5�_�                           ����                                                                                                                                                                                                                                                                                                                                         $       v   $    SV�     �         }      $dir = '/data/scsi/p/';5�_�                    F   '    ����                                                                                                                                                                                                                                                                                                                                         $       v   $    SV�     �   E   G   }      P$img_url = 'http://pic.qingdaonews.com/cwb/'.$dirname.'/'.$picname.'.'.$pictype;5�_�                    F   '    ����                                                                                                                                                                                                                                                                                                                                         $       v   $    SV�    �   E   G   }      M$img_url = 'http://pic.qingdaonews.com//'.$dirname.'/'.$picname.'.'.$pictype;5�_�                     8       ����                                                                                                                                                                                                                                                                                                                            8          8   "       v   "    SV6     �   7   9   }      $            'load.jsdelay' => '500',5�_�      !               8       ����                                                                                                                                                                                                                                                                                                                            8          8   "       v   "    SV8     �   7   9   }                  'load.jsdelay' => ,5�_�       "           !           ����                                                                                                                                                                                                                                                                                                                            8          8   "       v   "    SVA     �      	   }    �         }    5�_�   !   #           "          ����                                                                                                                                                                                                                                                                                                                            9          9   "       v   "    SVB     �      	   ~      -$checkurl = intval(help::getg('checkurl',1));5�_�   "   $           #          ����                                                                                                                                                                                                                                                                                                                            9          9   "       v   "    SVC     �      	   ~      %$ = intval(help::getg('checkurl',1));5�_�   #   %           $          ����                                                                                                                                                                                                                                                                                                                            9          9   "       v   "    SVG     �      	   ~      ,$jsdelay = intval(help::getg('checkurl',1));5�_�   $   &           %          ����                                                                                                                                                                                                                                                                                                                            9          9   "       v   "    SVG     �      	   ~      $$jsdelay = intval(help::getg('',1));5�_�   %   '           &      '    ����                                                                                                                                                                                                                                                                                                                            9          9   "       v   "    SVJ     �      	   ~      +$jsdelay = intval(help::getg('jsdelay',1));5�_�   &   (           '      '    ����                                                                                                                                                                                                                                                                                                                            9          9   "       v   "    SVJ    �      	   ~      *$jsdelay = intval(help::getg('jsdelay',));5�_�   '   )           (           ����                                                                                                                                                                                                                                                                                                                                       +           V        SV*�     �                //连接redis缓存   $redisArr = array(        'host'     => '10.10.16.63',       'port'     => 6379,       'database' => 7   );   try {       $redis = new Redis();   :    $redis->connect($redisArr['host'], $redisArr['port']);   *    $redis->select($redisArr['database']);       } catch (RedisException $e) {       $redis = '';       //echo $e->getMessage();   }   //redis长微博 缓存key   $rkey = 'cwb_';       %$status = $redis->get($rkey.$md5url);5�_�   (   *           )           ����                                                                                                                                                                                                                                                                                                                                                  V        SV*�     �                 5�_�   )   +           *           ����                                                                                                                                                                                                                                                                                                                                                  V        SV*�     �         j    5�_�   *   ,           +           ����                                                                                                                                                                                                                                                                                                                                                  V        SV*�     �         k    5�_�   +   .           ,           ����                                                                                                                                                                                                                                                                                                                            (          (   ;       v   ;    SV*�     �         l       5�_�   ,   /   -       .          ����                                                                                                                                                                                                                                                                                                                            (          (   ;       v   ;    SV*�     �         l      if()5�_�   .   0           /          ����                                                                                                                                                                                                                                                                                                                            (          (   ;       v   ;    SV*�     �         l      if(file_exists())�         l    5�_�   /   1           0      8    ����                                                                                                                                                                                                                                                                                                                            (          (   ;       v   ;    SV*�     �         l      8if(file_exists($dir.$dirname.'/'.$picname.'.'.$pictype))5�_�   0   2           1          ����                                                                                                                                                                                                                                                                                                                                         6       v   6    SV+     �         n      'if(empty($status) || $exptime == '0') {�         n    5�_�   1   3           2      7    ����                                                                                                                                                                                                                                                                                                                                         6       v   6    SV+     �         n      [if(file_exists($dir.$dirname.'/'.$picname.'.'.$pictype)empty($status) || $exptime == '0') {5�_�   2   4           3      ;    ����                                                                                                                                                                                                                                                                                                                               ;          L       v   L    SV+     �         n      _if(file_exists($dir.$dirname.'/'.$picname.'.'.$pictype) || empty($status) || $exptime == '0') {5�_�   3   5           4           ����                                                                                                                                                                                                                                                                                                                               8                 V   ;    SV+     �                9if(file_exists($dir.$dirname.'/'.$picname.'.'.$pictype)){       }5�_�   4   7           5   0        ����                                                                                                                                                                                                                                                                                                                            0          1          V       SV+     �   /   0          } else if($status == '3') {   &    error('网址不存在','error5');5�_�   5   8   6       7           ����                                                                                                                                                                                                                                                                                                                                                   V        SV+%     �                (    if($checkurl && !url_exists($url)) {   '        //$redis->set($rkey.$md5url,3);   1        //$redis->expire($rkey.$md5url,$exptime);   '        error('网址错误','error3');       }5�_�   7   9           8   '        ����                                                                                                                                                                                                                                                                                                                            '          *          V       SV+/    �   &   '              if($res) {   %        $redis->set($rkey.$md5url,2);   /        $redis->expire($rkey.$md5url,$exptime);       }5�_�   8   :           9          ����                                                                                                                                                                                                                                                                                                                            '          '          V       SV+c     �         `      Mif(file_exists($dir.$dirname.'/'.$picname.'.'.$pictype) || $exptime == '0') {5�_�   9   ;           :          ����                                                                                                                                                                                                                                                                                                                            '          '          V       SV+d     �         `      Nif(!file_exists($dir.$dirname.'/'.$picname.'.'.$pictype) || $exptime == '0') {5�_�   :   <           ;          ����                                                                                                                                                                                                                                                                                                                            '          '          V       SV+e     �         `      Pif(()!file_exists($dir.$dirname.'/'.$picname.'.'.$pictype) || $exptime == '0') {5�_�   ;   =           <      8    ����                                                                                                                                                                                                                                                                                                                            '          '          V       SV+i    �         `      Oif((!file_exists($dir.$dirname.'/'.$picname.'.'.$pictype) || $exptime == '0') {�         `    5�_�   <   >           =   .        ����                                                                                                                                                                                                                                                                                                                            .          2           V       SV+�     �   -   .          //$n = new imgdata;   8//$n -> getdir($dir.$dirname.'/'.$picname.'.'.$pictype);   //$n -> img2data();   //$n -> data2img();    5�_�   =   ?           >   5        ����                                                                                                                                                                                                                                                                                                                            .          .           V       SV+�     �   4   5          8    //echo '{"result":"error","info":"'.$info.'"}';exit;5�_�   >   @           ?   0        ����                                                                                                                                                                                                                                                                                                                            .          .           V       SV+�     �   /   0              // echo 'error';exit;5�_�   ?   A           @   6        ����                                                                                                                                                                                                                                                                                                                            6          Y           V        SV+�     �   5   6       $   //检测url是否可以打开   function url_exists($url) {       $ch = curl_init();   '    curl_setopt($ch, CURLOPT_URL,$url);   5    curl_setopt($ch, CURLOPT_NOBODY, 1); // 不下载   -    curl_setopt($ch, CURLOPT_FAILONERROR, 1);   0    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   3    return (curl_exec($ch)!==false) ? true : false;   }           //class imgdata {       //public $imgsrc;       //public $imgdata;       //public $imgform;   '    //public function getdir($source) {   #        //$this->imgsrc  = $source;       //}   "    //public function img2data() {   )        //$this->_imgfrom($this->imgsrc);   Y        //return $this->imgdata=fread(fopen($this->imgsrc,'rb'),filesize($this->imgsrc));       //}   "    //public function data2img() {   T        //header("Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate");   -        //header("Content-type: image/jpeg");   2        ////header("content-type:$this->imgform");           //echo $this->imgdata;            ////echo $this->imgform;   2        ////imagecreatefromstring($this->imgdata);       //}   )    //public function _imgfrom($imgsrc) {   &        //$info=getimagesize($imgsrc);           ////var_dump($info);   0        //return $this->imgform = $info['mime'];       //}   //}5�_�   @               A   5        ����                                                                                                                                                                                                                                                                                                                            6          6           V        SV+�    �   4   5           5�_�   5           7   6           ����                                                                                                                                                                                                                                                                                                                                                  V        SV+     �      !        5�_�   ,           .   -          ����                                                                                                                                                                                                                                                                                                                            (          (   ;       v   ;    SV*�     �         l    �         l      +if($dir.$dirname.'/'.$picname.'.'.$pictype)5��