jQuery(document).ready(function() {
    jQuery("body a[href$='.jpg'], body a[href$='.jpeg'], body a[href$='.png'], body a[href$='.gif']").addClass("fluidbox"), 
	jQuery("a[href$='.jpg'],a[href$='.png'],a[href$='.gif'],a[href$='.jpeg']").fluidbox(), 
	jQuery(".fluidbox").fluidbox(), jQuery(".gallery a[href$='.jpg'],.gallery a[href$='.png'],.gallery a[href$='.gif'],.gallery a[href$='.jpeg']").attr("rel", "gallery")
});