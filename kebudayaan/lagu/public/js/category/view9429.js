$(document).on('click', '#campaigns .loadPaginator', function (r) {
    r.preventDefault();
    $(this).remove();
    $('.loadMoreSpin').remove();
    $('<div class="col-xs-12 loadMoreSpin"><a class="list-group-item text-center"><i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i></a></div>').appendTo("#campaigns");

    var page = $(this).attr('href').split('page=')[1];
    var url = $('[data-category-more-url]').data('category-more-url') + page;
    $.ajax({
        url: url,
    }).done(function (data) {
        if (data) {
            $('.loadMoreSpin').remove();

            $(data).appendTo("#campaigns");
        } else {
            bootbox.alert(Translator.trans('misc.error.js'));
        }
        //<**** - Tooltip
    });
});