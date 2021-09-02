@extends('front.layout.base')
@section('wowslider-content')
<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div id="comments">
            <!-- ################################################################################################ -->
            <h1 align="center">Feedback</h1>
            <form action="#" method="post">
                <div class="one_third first">
                    <label for="name">Name <span>*</span></label>
                    <input type="text" name="name" id="name" size="22" required>
                </div>
                <div class="one_third">
                    <label for="email">Mail <span>*</span></label>
                    <input type="email" name="email" id="email" size="22" required>
                </div>
                <div class="one_third">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" size="22">
                </div>
                <div class="block clear">
                    <label for="comment">Your Comment</label>
                    <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
                </div>
                <div>
                    <button type="submit" name="submit" class="primary"> Submit</button> &nbsp;
                    <button type="reset" name="submit" class="reset"> Cancel</button>
                </div>
            </form>
            <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
@endsection