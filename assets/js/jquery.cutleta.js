$.fn.extend({
    cutleta: function (height) {
        var cuttedClass = 'cutleta-cutted'
        var cuttedButtonClass = 'cutleta-button-cutted'
        this.each(function () {
            var $block = $(this)
            var initialHeight = $block.css('overflow', 'hidden').height()
            height = height !== undefined ? height : $block.data('height')
            
            
            if (initialHeight > height) {
                $('<button class="truncate_more_link btn cutleta-button cutleta-button-cutted"></button>').insertAfter($block)

                var $button = $block.siblings('.cutleta-button')
                $button.text('Читать далее')

                $block.addClass(cuttedClass).height(height)
                $button.click(function () {
                    if ($block.hasClass(cuttedClass)) {
                        $block.animate({
                            height: initialHeight
                        }, 500, function () {
                            $block.removeClass(cuttedClass)
                            $button.removeClass(cuttedButtonClass)
                            $button.text('Свернуть')
                        })
                    } else {
                        $block.animate({
                            height: height
                        }, 500, function () {
                            $block.addClass(cuttedClass)
                            $button.addClass(cuttedButtonClass)
                            $button.text('Читать далее')
                        })
                    }
                    return false

                })
            }
        })
    }
})