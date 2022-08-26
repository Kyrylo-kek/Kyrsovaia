<!-- Modal -->
<div class="modal fade" id="checkout_modal" role="dialog">
    <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрити</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-shopping-cart text-success fa-lg"></i> Оформлення замовлення<small class='text-primary'> </small></h4>
      </div>
      <div class="modal-body">
        <form action="cart/data.php?q=checkout" method="POST">
            <div class="form-group">
                <label>Ім'я</label>
                <input type="text" name="fname" class="form-control" placeholder="(наприклад Іван)" required>
            </div>
            <div class="form-group">
                <label>Прізвище</label>
                <input type="text" name="lname" class="form-control" placeholder="(наприклад Іванов)" required>
            </div>
            <div class="form-group">
                <label>Номер телефону</label>
                <input type="text" name="contact" class="form-control" placeholder="(наприклад +380)" required>
            </div>
            <div class="form-group">
                <label>Пошта</label>
                <input type="email" name="email" placeholder="(наприклад example@gmail.com)" class="form-control">
            </div>
            <div class="form-group">
                <label>Адреса поставки</label>
                <input type="text" name="address" class="form-control" placeholder="(наприклад м.Київ, відділенння Нової Пошти, №1)" required>
            </div>
            <div class="alert alert-info">
                Спосіб оплати: <strong>Оплата при отриманні</strong>
            </div>
            <div class="alert alert-warning">
                *** Будь ласка очікуйте на повідомленя. Дякуємо за покупку! ***
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
        <button type="submit" class="btn btn-success">Оформити</button>
          </form>
      </div>
    </div>
  </div>
</div>