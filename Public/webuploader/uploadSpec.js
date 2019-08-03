/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-07-13 18:10:10
 * @version $Id$
 */
function uploadSpec(url,btn){
	// 初始化Web Uploader
	var $btn = '#'+btn;
	var thumbnailWidth = 35;
	var thumbnailHeight = 35;
	var uploader = WebUploader.create({

	    // 选完文件后，是否自动上传。
	    auto: true,

	    // swf文件路径
	    swf: '/Public/webuploader/0.1.5/Uploader.swf',

	    // 文件接收服务端。
	    server: url,

	    // 选择文件的按钮。可选。
	    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
	    pick: $btn,

	    // 只允许选择图片文件。
	    accept: {
	        title: 'Images',
	        extensions: 'gif,jpg,jpeg,bmp,png',
	        mimeTypes: 'image/*'
	    }
	});
		//修改按钮默认样式  
       $($btn+' .webuploader-pick').css('display','inline');  
       $($btn+' .webuploader-pick').css('padding','0');

	// 当有文件被添加进队列的时候
	// uploader.on( 'fileQueued', function( file ) {
	// 	// 创建缩略图
	// 	// 如果为非图片文件，可以不用调用此方法。
	// 	// thumbnailWidth x thumbnailHeight 为 100 x 100
	// 	uploader.makeThumb( file, function( error, src ) {	
	// 		$($btn).find('img').attr( 'src', src );
	// 	}, thumbnailWidth, thumbnailHeight );
	// });
	// 文件上传成功
	uploader.on( 'uploadSuccess', function( file,respond ) {
		$($btn).find('img').attr( 'src', respond.img );
		$('.'+btn+' input').attr('value',respond.img);
	});
}


