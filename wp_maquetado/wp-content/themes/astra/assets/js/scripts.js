/**
 * Funcion obtener hashtag
 * Esta función permite crear un hashtag de la imagen a traves del nombre original de la imagen en la url
 * recibe como parametro el valor de la url de la imagen
 * @param {*} url
 */
function gethashtag(url){
    let tags = url.slice(29)
    let hashtag = '#'
    tags = tags.split('-')
    tags = tags.slice(0,-1)
    for(let tag of tags){
        hashtag +=  tag[0].toUpperCase() + tag.slice(1)
    }
    return hashtag
}
/**
 * Funcion nueva card
 * Esta funcion recibe como parametro los items obtenidos de las busquedas en las api de imagenes (item) - (avatar)
 *
 * @param {*} item
 * @param {*} avatar
 */
function newCard(item){
    //let hashtag = gethashtag(item.url)
    const card = `
        <div class="col-lg-4 col-md-6 col-sm-12 p-0 item-cards">
            <div class="d-flex flex-row">
                <img class="img-fluid pic" src="${item.image.src}" alt="${item.image.alt}">
            </div>
            <div class="d-flex flex-row photographer-data">
                <div class="d-flex px-2 align-items-center">
                    <img class="avatar rounded-circle" src="${item.author.src}" alt="${item.author.alt}">
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <p class="p-0 m-0 photographer-name">
                        ${item.author.name}
                    </p>
                    <p class="p-0 m-0 photographer-tag">
                        ${item.hashtags}
                    </p>
                </div>
            </div>
        </div>
    `
    return card
}

(function($){
    $('#load_more_posts').on('click', function(e){
        $('#spinner').show();
        $('#loadmore-content').hide();
        console.log('hi');
        e.preventDefault();
        var $offset = $(this).data('offset');
        console.log('var'+$offset);
        let pack_pictures = '';
        $.ajax({
            method: 'POST',
            url: ajax_object.ajaxurl,
            type: 'JSON',
            data: {
                offset: $offset,
                search: $('#search').val(),
                action: 'load_more_posts'
            },
            success:function(response){
                /*console.log(response);*/
                //alert(parseInt(response.data.offset));
                $('#load_more_posts').data('offset', parseInt(response.data.offset));
                $.each(response.data.post, function(i, item) {
                    //alert("Value is :" + item.author.name);
                    const card = newCard(item)
                    pack_pictures += card
                });
                $('#cards').append(pack_pictures);
                $('#loadmore-content').css('display', 'flex');

                $('#cards').css('display', 'flex');
                $('#spinner').hide();
            }
        });
    })

    /**
     * Funcion de nueva busqueda de imagenes
     */
    search.addEventListener('keyup', async (e) => {
        if(e.key == 'Enter'){
                $('#load_more_posts').data('offset', 0);
                $('#cards').empty ();
                $('#load_more_posts').click();

        }
    })


    $('#load_more_posts').click();
})(jQuery);



