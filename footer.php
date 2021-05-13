<footer class="footer mt-5">
    <button id="addMessage" class="btn btn-primary">+ сообщение</button>
    
    <script>
        let bottomTransperent = 1;
        $('#addMessage').on('click', function () {
            $('footer').append('\
                <div class="message-dialog" role="document">\
                    <div class="modal-header">\
                        <h5 class="modal-title">Новый заказ</h5>\
                        <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">\
                        <span aria-hidden="true">&times;</span>\
                        </button>\
                    </div>\
                    <div class="modal-body">\
                        <p>#C-sharp: Создать программу хранилище</p>\
                    </div>\
                    <div class="modal-footer"> \
                        <button type="button" class="btn btn-primary">Принять</button>\
                        <button type="button" class ="btn btn-secondary" data-dismiss="modal">Отклонить</button>\
                    </div>\
                    </div>\
                </div>');
            $('.message-dialog:last-child').css({"bottom": `${bottomTransperent}%`});  
            bottomTransperent +=17;
        });
        $('.message-dialog').on('click', function () {
            console.log("jjh");
            $('.message-dialog').css("display","none");
        });
    </script>

    <div class="container">
        <div class="d-flex justify-content-between">
            <span>© 2020 GoGameSchool.</span>
            <a href="https://gogame_school@mail.ru">gogame_school@mail.ru</a>
            <div>
                <a href="https://www.instagram.com/gogame_school/?hl=ru"><img id="LnkBr00imageimageimage" alt="Instagram - Белый круг" data-type="image" itemprop="image" style="width: 36px; height: 36px; object-fit: cover;" src="https://static.wixstatic.com/media/da7ef6dd1302486c9a67baebe4b364bc.png/v1/fill/w_45,h_45,al_c,q_85,usm_0.66_1.00_0.01/da7ef6dd1302486c9a67baebe4b364bc.webp"></a>
                <a href="https://vk.com/gogameschool"><img id="LnkBr01imageimageimage" alt="Vkontakte - Белый круг" data-type="image" itemprop="image" style="width: 36px; height: 36px; object-fit: cover;" src="https://static.wixstatic.com/media/f96243f8a8f44e6c952d86da576cec13.png/v1/fill/w_45,h_45,al_c,q_85,usm_0.66_1.00_0.01/f96243f8a8f44e6c952d86da576cec13.webp"></a>
            </div>
        </div>
    </div>
</footer>
    <!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>   ton type="button" class="btn btn-secondary" data-dismiss="modal">Отклонить</button>\
                    </div>\
                    </div>\
                </div>');
            $('.message-dialog:last-child').css({"bottom": `${bottomTransperent}%`});  
            bottomTransperent +=17;
                      </div>\
                </div>');
            $('.message-dialog:last-child').css({"bottom": `${bottomTransperent}%`});  
            bottomTransperent +=17;
                      </div>\
                </div>');
            $('.message-dialog:last-child').css({"bottom": `${bottomTransperent}%`});  
            bottomTransperent +=17;
        });
        $('.message-dialog').on('click'-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
