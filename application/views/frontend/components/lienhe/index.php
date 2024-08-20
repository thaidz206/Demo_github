<?php echo form_open( base_url()."lien-he"); ?>

<style>
/* Container */
.contact-container {
    height: 100vh;
    background-color: white;
    margin-top: 40px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Row */
.contact-row {
    background-color: white;
    margin-top: 30px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

/* Column */
.contact-info, .contact-details {
    padding: 20px;
}

.contact-info {
    flex: 1;
}

.contact-details {
    flex: 1;
}

/* Contact Items */
.contact-item {
    margin-bottom: 20px;
}

.contact-item a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.contact-item a:hover {
    text-decoration: underline;
}

/* Address */
.contact-address {
    margin-bottom: 20px;
}

/* Map */
.contact-map iframe {
    width: 100%;
    height: 400px;
    border: none;
}

/* Responsive Design */
@media (max-width: 768px) {
    .contact-row {
        flex-direction: column;
    }

    .contact-info, .contact-details {
        flex: 1 1 100%;
    }
}


</style>
<?php echo form_open(base_url()."lien-he"); ?>
<section>
    <div class="container contact-container">
		<h1>THÔNG TIN LIÊN HỆ</h1>
        <div class="row contact-row">
            <div class="col-6 contact-info">
                <div class="contact-item">
                    <a href="">Liên hệ cho chúng tôi qua Facebook</a>
                </div>
                <div class="contact-item">
                    <a href="">Liên hệ chúng tôi qua Zalo</a>
                </div>
                <div class="contact-item">
                    <a href="">Số điện thoại liên hệ: <span>0859364748</span></a>
                </div>
            </div>
            <div class="col-6 contact-details">
                <div class="contact-address">
                    <p>Địa chỉ liên hệ: 70/15A Nguyễn Sĩ Sách, Phường 15, Quận Tân Bình, TP Hồ Chí Minh</p>
                </div>
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.886434115387!2d106.63344640941921!3d10.82000215834639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529641d904921%3A0xe6d27f55131b0f39!2zNzAgTmd1eeG7hW4gU-G7uSBTw6FjaCwgUGjGsOG7nW5nIDE1LCBUw6JuIELDrG5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1717314218548!5m2!1svi!2s"
                        width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
	<hr>
	<div class="container" style="background-color: white;">
		<div class="col-md-7 col-12">
			<div class="section-article contactpage" style="  padding-left: 20px;">
				<?php 
				echo validation_errors();
				
				?>
				<form accept-charset="UTF-8" action="<?php echo base_url() ?>lien-he" id="contact" method="post">
					<input name="FormType" type="hidden" value="contact">
					<input name="utf8" type="hidden" value="true">
					<h1 style="color: black">Liên hệ với chúng tôi</h1>				
					
					<div class="form-comment">
						<div class="row" style="padding-left: 14px;">
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="name"><em> Họ tên</em><span class="required">*</span></label>
									<input id="name" name="fullname" type="text" value="" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="email"><em> Email</em><span class="required">*</span></label>
									<input id="email" name="email" class="form-control" type="email" value="">
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="phone"><em> Số điện thoại</em><span class="required">*</span></label>
									<input type="number" id="phone" class="form-control" name="phone">

								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="message"><em> Tiêu đề</em><span class="required">*</span></label>
							<textarea id="message" name="title" class="form-control custom-control" rows="2"></textarea>
						</div>
						<div class="form-group">
							<label for="message"><em> Lời nhắn</em><span class="required">*</span></label>
							<textarea id="message" name="content" class="form-control custom-control" rows="5"></textarea>
						</div>
						<button type="submit" class="btn-update-order" >Gửi nhận xét</button>

					</div>
				</form>
			</div>
		</div>
	

	</div>

	</div>

</section>