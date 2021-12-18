"use strict";
var KTUsersAddUser = function () {
    const t = document.getElementById("kt_modal_add_user"), e = t.querySelector("#kt_modal_add_user_form"),
        n = new bootstrap.Modal(t);
    return {
        init: function () {
            (() => {
                var o = FormValidation.formValidation(e, {
                    fields: {
                        name: {validators: {notEmpty: {message: "Tam isim gereklidir"}}},
                        email: {validators: {notEmpty: {message: "Geçerli bir e-posta adresi gereklidir."}}},
                        password: {validators: {notEmpty: {message: "Geçerli bir şifre girmeniz gereklidir."}}}
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                });
                const i = t.querySelector('[data-kt-users-modal-action="submit"]');
                i.addEventListener("click", (t => {
                    t.preventDefault(), o && o.validate().then((function (t) {
                        console.log("validated!"), "Valid" == t ? (i.setAttribute("data-kt-indicator", "on"), i.disabled = !0, setTimeout((function () {
                            i.removeAttribute("data-kt-indicator"), i.disabled = !1, Swal.fire({
                                text: "İşleminiz başarılı bir şekilde tamamlandı!",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {confirmButton: "btn btn-primary"}
                            }).then((function (t) {
                                t.isConfirmed && n.hide()
                            }))
                        }), 2e3)) : Swal.fire({
                            text: "Üzgünüz, formda hatalar var, lütfen tekrar deneyiniz.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {confirmButton: "btn btn-primary"}
                        })
                    }))
                })), t.querySelector('[data-kt-users-modal-action="cancel"]').addEventListener("click", (t => {
                    t.preventDefault(), Swal.fire({
                        text: "İptal etmek istediğinize emin misiniz?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Evet,iptal et!",
                        cancelButtonText: "Hayır, geri dön",
                        customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                    }).then((function (t) {
                        t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                            text: "İşleminiz iptal edildi...",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {confirmButton: "btn btn-primary"}
                        })
                    }))
                })), t.querySelector('[data-kt-users-modal-action="close"]').addEventListener("click", (t => {
                    t.preventDefault(), Swal.fire({
                        text: "İptal etmek istediğinize emin misiniz?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Evet,iptal et!",
                        cancelButtonText: "Hayır, geri dön",
                        customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                    }).then((function (t) {
                        t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                            text: "İşleminiz iptal edildi...",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {confirmButton: "btn btn-primary"}
                        })
                    }))
                }))
            })()
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTUsersAddUser.init()
}));
