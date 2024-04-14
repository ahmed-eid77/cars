<!-- Newsletter-->
<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>اخر الاخبار</h3>
                <p>انضم الينا للنشرة البريدية</p>
            </div>
            <div class="col-md-8">
                <form action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="email" placeholder="اكتب بريدك الالكتروني">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">اشترك <i class="fa fa-paper-plane"
                                    aria-hidden="true"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
