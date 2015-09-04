(function($){
  $(document)
    .on('click', 'ul.documentation-tabs li:not(.on)', function(){
      var tab_index = $(this).index();
      $(this).addClass('on').siblings().removeClass('on');
      var $selected_file = $('.documentation-files .file').eq(tab_index);
      $selected_file.addClass('on').siblings().removeClass('on');
      var $selected_part = $selected_file.find('.file-toc li.on');
      if(!$selected_part.length) {
        $selected_file.find('.file-toc li:first-child').click();
      }
    })
    .on('click', '.documentation-files .file-toc li:not(.on)', function(){
      var part_index = $(this).index();
      $(this).addClass('on').siblings().removeClass('on');
      $('.documentation-files .file.on .part').eq(part_index).addClass('on').siblings().removeClass('on');
    });
  
  $(function(){
    // ready
    $('ul.documentation-tabs li:first-child').click();
    $('.documentation-files > .file:first-child .file-toc li:first-child').click();
  });
})(jQuery);
