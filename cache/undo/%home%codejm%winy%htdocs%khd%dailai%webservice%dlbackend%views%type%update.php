Vim�UnDo� �|B��jZ~Q
Dz���=�=��庭 ����D   ,   j                        <?php echo CHtml::activeLabel($model, 'logo', array('class'=>'control-label')); ?>      i                       Se��    _�                             ����                                                                                                                                                                                                                                                                                                                                                             Se�     �         +    �         +    5�_�                   #   !    ����                                                                                                                                                                                                                                                                                                                                                             Se�B     �   #   %   /    �   #   $   /    5�_�                    %        ����                                                                                                                                                                                                                                                                                                                            %           %   �       v   �    Se�I     �   $   &   0      �                                <?php echo CHtml::activeFileField($model, 'logo');?>（图片推荐尺寸：x宽 * x高）                        </div>5�_�                    $        ����                                                                                                                                                                                                                                                                                                                            %           %   �       v   �    Se�K    �   #   %          �                                <?php echo CHtml::activeFileField($model, 'logo', array("onchange"=>"getFullPath(this)"));?>（图片推荐尺寸：x宽 * x高）                        5�_�      	              0        ����                                                                                                                                                                                                                                                                                                                            %           %   �       v   �    Se�U    �   0            �   0            5�_�      
           	   2        ����                                                                                                                                                                                                                                                                                                                            2           N           V        Se�q    �   1   2          function getFullPath(file) {       var MAXWIDTH  = 100;       var MAXHEIGHT = 100;   1    var div = document.getElementById('preview');   &    if (file.files && file.files[0]) {   +        div.innerHTML = '<img id=imghead>';   5        var img = document.getElementById('imghead');            img.onload = function(){   `            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);   #            img.width = rect.width;   %            img.height = rect.height;   2            img.style.marginLeft = rect.left+'px';   0            img.style.marginTop = rect.top+'px';   	        }   &        var reader = new FileReader();   C        reader.onload = function(evt){img.src = evt.target.result;}   ,        reader.readAsDataURL(file.files[0]);       } else {   i        var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';           file.select();   8        var src = document.selection.createRange().text;   +        div.innerHTML = '<img id=imghead>';   5        var img = document.getElementById('imghead');   R        img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;   \        var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);   P        status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);   �        div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;margin-left:"+rect.left+"px;"+sFilter+src+"\"'></div>";       }   }5�_�   	              
   1        ����                                                                                                                                                                                                                                                                                                                            1          2          V       Se�    �   0   1          /<script type="text/javascript" charset="utf-8">   	</script>5�_�   
                         ����                                                                                                                                                                                                                                                                                                                                                  V        Se�    �                <style type="text/css">   3#preview{width:100px;height:100px;overflow:hidden;}   u#preview img{width:100%; height:100%; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=image);}   </style>5�_�                       i    ����                                                                                                                                                                                                                                                                                                                                                  V        Se��     �         ,      j                        <?php echo CHtml::activeLabel($model, 'name', array('class'=>'control-label')); ?>�         ,    5�_�                        i    ����                                                                                                                                                                                                                                                                                                                                                  V        Se��    �         ,      j                        <?php echo CHtml::activeLabel($model, 'logo', array('class'=>'control-label')); ?>�         ,    5�_�                   #       ����                                                                                                                                                                                                                                                                                                                                                             Se�1     �   #   $   /    �   #   $   /      �                                <?php echo CHtml::activeFileField($model, 'logo', array("onchange"=>"getFullPath(this)"));?>（图片推荐尺寸：x宽 * x高）                        </div>5�_�                   #       ����                                                                                                                                                                                                                                                                                                                                                             Se�.     �   #   $   /    �   #   $   /      �                                <?php echo CHtml::activeFileField($model, 'logo', array("onchange"=>"getFullPath(this)"));?>（图片推荐尺寸：x宽 * x高）                        </div>5�_�                    #       ����                                                                                                                                                                                                                                                                                                                                                             Se�     �   #   $   /    �   #   $   /      j                        <?php echo CHtml::activeLabel($model, 'logo', array('class'=>'control-label')); ?>5��