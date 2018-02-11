
<!--==========================
  suggest Section
============================-->

 <section id="suggest">
    <div class="container well"  style="margin-top: 20px; text-align: center; font-family: 'B Nazanin';border: solid 1px;background: rgba(255,230,230,.8) ">
        <form class="form-group margin-50" method="post" action="/sendsuggest">
            <h2 >
                پیشنهادات و انتقادات
            </h2>
            <div class="row margin-50">

                <div class="col-sm-8">
                    <input class="form-control" type="text" name="name" value="a">
                </div>
                <div class="col-sm-4" >نام و نام خانوادگی :</div>
            </div>

            <div class="row margin-50">
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" value="a@b.c">
                </div>

                <div class="col-sm-4">ایمیل :</div>
            </div>

            <div class="row margin-50">
                <div class="col-sm-8">
                    <input class="form-control " type="text" name="number"  value="123">
                </div>

                <div class="col-sm-4">شماره تماس :</div>
            </div>
            <div class="row margin-50">
                <div class="col-sm-8">
                    <select class="form-control" name="important">
                        <option value="1">کم</option>
                        <option selected="selected" value="2">متوسط</option>
                        <option value="3">زیاد</option>
                        <option value="4">خیلی زیاد</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    اهمیت
                </div>
            </div>

            <div class="row margin-50">
                <div class="col-sm-8">
                    <textarea class="form-control" style="height: 150px;" name="suggested">asd</textarea>

                </div>

                <div class="col-sm-4">پیشنهادات و انتقادات :</div>

            </div>
            <div class="row margin-50" style="text-align: center">
                <input class="btn btn-success" type="submit" value="تایید">
            </div>

        </form>
    </div>
</section>

