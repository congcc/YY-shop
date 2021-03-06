<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="/homes/imageInput/js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="/homes/layer/layer.js" type="text/javascript"></script>
    <script src="/homes/imageInput/js/ssi-uploader.js"></script>
    <link rel="stylesheet" type="text/css" href="/homes/imageInput/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/homes/imageInput/css/style.css">
    <link rel="stylesheet" href="/homes/imageInput/css/ssi-uploader.css"/>
</head>
<body>

<input type="file" name="pic" multiple id="ssi-upload7"/>

<script>
 $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
   var imgNum=0;
    $('#ssi-upload7').ssi_uploader({
                    url: '/home/seller/upload',
                    onUpload: function () {
                        ssi_modal.notify('info', $.extend({}, notifyOptions, {
                            title: 'onUpload',
                            icon: false,
                            position: 'top center'
                        }));
                    },
                      onEachUpload: function (fileInfo,xhr) {
                       imgNum++;
                          console.log(xhr);

                        $('#pic'+imgNum, parent.document).attr('src','http://ozsps8743.bkt.clouddn.com/img/image_'+xhr);



                        

                        ssi_modal.notify('error', $.extend({}, notifyOptions, {
                            classSize: 'auto',
                            title: 'onEachUpload',
                            position: 'bottom center',
                            content: 'Status: ' + fileInfo.uploadStatus +
                            '<br>Response: ' + fileInfo.responseMsg +
                            '<br>name: ' + fileInfo.name +
                            '<br>size: ' + fileInfo.size +
                            '<br>type: ' + fileInfo.type
                        }));

                    }
                    
                });
            
</script>
</body>
</html>