// Шаблон модального окна

(function($){

    $.fn.wseModalWindow = function( options ) {
        // Настройки по умолчанию
        var settings = $.extend({
            'type'      : 'message' // message / confirm / contant
            'id'        : '',
            'width'     : '300px',
            'height'    : '100px',
            'content'   : ''
        }, options);

        function initModalWindow() {
            // подключаем таблицу стилей
            $('head').append($('<link>', {
                'rel'   : 'stylesheet',
                'href'  : '/css/modal.window.css',
                'type'  : 'text/css'
            }));

            $('div.container').append(
                $('<div id="' + settings.id + '-overlay" class="wse-modal-window-overlay">' +
                    '<div id="' + settings.id + '-modal-window" class="wse-modal-window">' +
                    '</div>' +
                '</div>'
            ));

            $('#'+  settings.id + '-modal-window').css({
                'width'     : settings.width,
                'height'    : settings.height,
            });
        }

        function closeModalWindows() {
            $('#' + settings.id + '-overlay').remove();
            $('link[href="/css/modal.window.css"]').remove();
        }

        this.click(function(){
            initModalWindow($(this));
        });

        return this;
    };
})(jQuery);
