(function($){
	
	$.fn.tzSelect = function(options){
	 
		options = $.extend({
			render : function(option){
 	return $('<li>',{
 		html : option.text()
 	});
 },
 className : ''
		},options);
		
		return this.each(function(){
 
      
 // ключевое слово  "this" это текущий элемент select
      
 
 var select = $(this);
		
     // selectBoxContainer - блок обертка для ul
    
 var selectBoxContainer = $('<div>',{
 	width		: select.outerWidth(),
 	className	: 'tzSelect',
 	html		: '<div class="selectBox"></div>'
 });
		
    
    // dropDown - выпадающее меню
 var dropDown = $('<ul>',{className:'dropDown'});
 var selectBox = selectBoxContainer.find('.selectBox');
 
     // Цикл по тегам option оригинального тега select
		

 if(options.className){
 	dropDown.addClass(options.className);
 }
 
 select.find('option').each(function(i){
 	var option = $(this);
		
 	if(i==select.attr('selectedIndex')){
 		selectBox.html(option.text());
 	}
 	
 	// Так как  у нас jQuery 1.4.3 то получить доступ к атрибуту
        // HTML5 data  можно при помощи метода data())
        
 	
 	if(option.data('skip')){
 		return true;
 	}
 	
 	// создаем выпадающий список, согласно атрибутам HTML5
        // data-icon и data-html-text  
    
 	
 	var li = options.render(option);

 	li.click(function(){
 		
 		selectBox.html(option.text());
 		dropDown.trigger('hide');
 		
 		// При клике отражаем изменения на оригинальное 
          // элементе select
          
          
 		select.val(option.val());
 		
 		return false;
 	});
		
 	dropDown.append(li);
 });
 
 selectBoxContainer.append(dropDown.hide());
 select.hide().after(selectBoxContainer);
 
 // Связываем события show и hide 
      // с выпадающим меню dropDown:
 
 dropDown.bind('show',function(){
 	
 	if(dropDown.is(':animated')){
 		return false;
 	}
 	
 	selectBox.addClass('expanded');
 	dropDown.slideDown();
 	
 }).bind('hide',function(){
 	
 	if(dropDown.is(':animated')){
 		return false;
 	}
 	
 	selectBox.removeClass('expanded');
 	dropDown.slideUp();
 	
 }).bind('toggle',function(){
 	if(selectBox.hasClass('expanded')){
 		dropDown.trigger('hide');
 	}
 	else dropDown.trigger('show');
 });
 
 selectBox.click(function(){
 	dropDown.trigger('toggle');
 	return false;
 });
		
 // Если произошел клик где-нибудь на странице при
 // открытом выпадающем списке, то скрываем его:
 
 $(document).click(function(){
 	dropDown.trigger('hide');
 });

		});
	}
	
})(jQuery);