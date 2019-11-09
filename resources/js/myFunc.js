export class myFunc {

    saving(btn) {
        btn.setAttribute('value', " در حال ذخیره  ");
        setTimeout(function () {
            btn.setAttribute('value', " در حال ذخیره .");
        }, 350);
        setTimeout(function () {
            btn.setAttribute('value', " در حال ذخیره ..");
        }, 600);
        setTimeout(function () {
            btn.setAttribute('value', " در حال ذخیره ...");
        }, 1000);
        setTimeout(function () {
            btn.setAttribute('value', " در حال ذخیره ....");
        }, 1500);
        setTimeout(function () {
            btn.setAttribute('value', "  ذخیره ");
        }, 2000);
    }

    flash(self) {
        setTimeout(function () {
            swal({
                buttons: false,
                title: "با موفقیت",
                text: `${self} ذخیره گردید`,
                icon: "success",
                timer: 3000
            });
        setTimeout(function () {
                location.reload(true)
            }, 3000);
            location.reload(true)
        }, 2500);
    }
}


