<script src="<?php echo base_url(); ?>assets/js/nicEdit.js" type="text/javascript"></script>

<script type="text/javascript">
bkLib.onDomLoaded(function() {
  nicEditors.allTextAreas({
	  uploadURI : '<?php echo base_url();?>nicUpload/do_upload', 
	  buttonList : ['bold','italic','underline','upload'], 
	  iconsPath:'<?php echo base_url(); ?>assets/js/nicEditorIcons.gif'
  });
}); 
</script>

<?php echo form_textarea(array('name' => 'test')); ?>
