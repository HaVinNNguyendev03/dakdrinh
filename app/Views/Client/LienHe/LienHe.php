<?= $this->extend('Client/Layout/Base') ;?>
<?= $this->section('DakDrinh') ;?>
    
<div class="col-10 my-4 mx-auto d-lg-flex">
<ul class="col-12 col-md-5 mx-auto p_contact-info">
                <li><h2><span class="fa fa-home fa-abs-top">CÔNG TY CỔ PHẦN THỦY ĐIỆN ĐAKĐRINH</span></h2></li>
                <li><span class="fa fa-map-marker fa-abs-top">Thôn Ra Nhua, Xã Sơn Tân, Huyện Sơn Tây, Tỉnh Quảng Ngãi</span></li>
                <li>
                    <span class="fa fa-phone">(0255) 629 3777</span>
                    <span class="fa fa-mobile">0986 172 777</span>
                </li>
                <li>
                    <span class="fa fa-envelope ht-hover"><a href="mailto:vanthudhc@gmail.com">vanthudhc@gmail.com</a></span>
                    <span class="fa fa-globe ht-hover"><a href="https://dakdrinh.com.vn">https://dakdrinh.com.vn</a></span>
                </li>
                <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3853.6169155123766!2d108.39384910465232!3d15.0139559561092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31699fd847a168a1%3A0x5bd5e15a482edc0b!2zVGjhu6d5IMSRaeG7h24gxJBha8SRcmluaC4!5e0!3m2!1svi!2s!4v1572424112486!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></li>
            </ul>
<form class="col-12 col-md-5 mx-auto" id="form_contact" action="<?php echo base_url() ?>api/lienhe" method="POST" accept-charset="utf-8" enctype="multipart/form-data" novalidate="novalidate">
                <div class="form-group c-form c-form--icon is-empty">
                    <span class="c_icon"><i class="fa fa-user text--icon" aria-hidden="true"></i></span>
                    <input type="text" name="fullname" class="c_input" value="" placeholder="Họ và tên (*)">
                                    </div>
                <div class="form-group c-form c-form--icon is-empty">
                    <span class="c_icon"><i class="fa fa-phone-square text--icon" aria-hidden="true"></i></span>
                    <input type="text" name="phone" class="c_input" value="" placeholder="Điện thoại (*)">
                                    </div>
                <div class="form-group c-form c-form--icon is-empty">
                    <span class="c_icon"><i class="fa fa-envelope text--icon" aria-hidden="true"></i></span>
                    <input type="text" name="email" class="c_input" value="" placeholder="Email (*)">
                                    </div>
                <div class="form-group c-form c-form--icon is-empty">
                    <span class="c_icon"><i class="fa fa-map-marker text--icon" aria-hidden="true"></i></span>
                    <input type="text" name="address" class="c_input" value="" placeholder="Địa chỉ">
                </div>
                <div class="form-group c-form c-form--icon is-empty">
                    <span class="c_icon c_icon--top"><i class="fa fa-info-circle text--icon" aria-hidden="true"></i></span>
                    <textarea name="content" class="c_input" rows="2" placeholder="Nội dung"></textarea>
                </div>
                <div class="form-group text-center"><button type="submit" class="c-btn--primary">Gửi</button></div>
            </form>
</div>

<?= $this->endSection() ;?>