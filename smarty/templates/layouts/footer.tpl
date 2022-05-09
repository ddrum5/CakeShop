<footer>
  <div class="container">
    <div class="col-sm-5 text-left">
      © Bản quyền thuộc về {$title_website}
    </div>
    <div class="col-sm-7 text-right">
      {$address} | Email: {$email} | Hotline: {$phone_number}
    </div>
  </div>
</footer>
{include file="layouts/script.tpl" }

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/6275e6fdb0d10b6f3e7101ca/1g2e8sk3k';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>





{if isset($smarty.session.thongBao)}
  <script>
    swal("{$smarty.session.thongBao}");
  </script>
{/if}
{if isset($smarty.session.thongBaoThanhCong)}
  <script>
    swal({
      title: "Thành công!",
      text: "{$smarty.session.thongBaoThanhCong}!",
      icon: "success"
    }).then(function() {
      $.ajax({
        success: function() {
          window.location = "thong_tin_ca_nhan.php";
        }
      });
    });
  </script>
{/if}

</body>

</html>