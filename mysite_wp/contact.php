<?php get_header(); ?>
  <main>
    <section class="contact-intro">
      <p>ウェブサイトの作成をご予定ですか？</p>
      <h1><small>ご相談ください。</small></h1>
      <p class="form-title-text">下記のフォームよりお気軽にご連絡ください。お待ちしております。</p>
    </section>
    <section class="signup-form">
        <form class="signup-form" action="">
          <label class="form__label" for="name">お名前</label>
          <input type="email" id="name" name="name">

          <label class="form__label" for="email">メールアドレス</label>
          <input  type="email" id="email" name="email">

          <label class="form__label" for="massage">メッセージ</label>
          <textarea name="massage" id="massage"></textarea>
          <a href="#" class="btn btn-pink submit">送信</a>
        </form>
    </section>
  </main>
<?php get_footer(); ?>
