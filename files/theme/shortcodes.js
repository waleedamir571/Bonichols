$(document).ready(function() 
{
    var options =
    {
        dropDownSpeed : 50,
        slideUpSpeed : 200,
        slideDownTabSpeed: 300,
        changeTabSpeed: 200,
        closeParentSpeed: 200
    };
    
    var methods = 
    {
        slideDownTab : function()
        {
            var tab = $(this).parent();
            
            tab.find('> :last-child').stop(true, true).slideToggle(options.slideDownTabSpeed);
            if (tab.hasClass('current'))
            {
                tab.removeClass('current');
            }
            else
            {
                tab.addClass('current');
            }
        },
        
        accordionTab : function()
        {
            var tab = $(this).parent();
            var current = false;
            
            if (!tab.hasClass('current'))
            {   
                tab.find('> :last-child').slideDown(options.slideDownTabSpeed);
                current = true;
            }

            tab.parent().find('.current').removeClass('current').find('> :last-child').stop(true, true).slideToggle(options.slideDownTabSpeed); 
                       
            if (current === true)
            {
                tab.addClass('current');            
            }
        },
        
        changeTab : function()
        {
            var tabNum = $(this).index() + 1;
            var tabs = $(this).parents('.tabs');
            
            tabs.find('li.current').removeClass('current');
            $(this).addClass('current');
            tabs.find('.tab-content.active').fadeOut(options.changeTabSpeed - 50).removeClass('active');
            tabs.find('.tab-content:nth-child(' + tabNum + ')').fadeIn(options.changeTabSpeed).addClass('active');
        },
        
        closeParent : function()
        {
            $(this).parent().fadeOut(options.closeParentSpeed);
        }       
};
    
    $('.tabs ul').on('click', 'li:not(.current)', methods.changeTab);
    $('.accordion-wrp h6').on('click', methods.accordionTab);
    
});




