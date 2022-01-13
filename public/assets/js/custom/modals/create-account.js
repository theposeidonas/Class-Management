"use strict";
var KTCreateAccount = function () {
    var e, t, i, o, s, r, a = [];
    return {
        init: function () {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e), t = document.querySelector("#kt_create_account_stepper"), i = t.querySelector("#kt_create_account_form"), o = t.querySelector('[data-kt-stepper-action="submit"]'), s = t.querySelector('[data-kt-stepper-action="next"]'), (r = new KTStepper(t)).on("kt.stepper.changed", (function (e) {
                4 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), s.classList.add("d-none")) : 5 === r.getCurrentStepIndex() ? (o.classList.add("d-none"), s.classList.add("d-none")) : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), s.classList.remove("d-none"))
            })), r.on("kt.stepper.next", (function (e) {
                console.log("stepper.next");
                var t = a[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function (t) {
                    if (e.getCurrentStepIndex() == 2){


                        console.log("3 teyiz");
                        var radios = document.getElementsByName('faculty_type');
                        for (var im = 0, length = radios.length; im < length; im++) {
                            if (radios[im].checked) {
                                var faculty = radios[im].value;
                                break;
                            }
                        }
                         radios = document.getElementsByName('capacity');
                        for ( im = 0, length = radios.length; im < length; im++) {
                            if (radios[im].checked) {
                                var capacity = radios[im].value;
                                break;
                            }
                        }
                        var lesson = document.getElementById("lesson");
                        lesson = lesson.value;
                        if(document.querySelector('.blackboard:checked') != null) {var blackboard = document.querySelector('.blackboard:checked').value;}
                        else { var blackboard = 0;}
                        if(document.querySelector('.special_seats:checked') != null) {var special_seats = document.querySelector('.special_seats:checked').value;}
                        else { var special_seats = 0;}
                        if(document.querySelector('.proffessor_chair:checked') != null) {var proffessor_chair = document.querySelector('.proffessor_chair:checked').value;}
                        else { var proffessor_chair = 0;}
                        if(document.querySelector('.projector:checked') != null) {var projector = document.querySelector('.projector:checked').value;}
                        else { var projector = 0;}
                        if(document.querySelector('.smartboard:checked') != null) {var smartboard = document.querySelector('.smartboard:checked').value;}
                        else { var smartboard = 0;}
                        if(document.querySelector('.internet:checked') != null) {var internet = document.querySelector('.internet:checked').value;}
                        else { var internet = 0;}
                        if(document.querySelector('.pc:checked') != null) {var pc = document.querySelector('.pc:checked').value;}
                        else { var pc = 0;}
                        if(document.querySelector('.webcam:checked') != null) {var webcam = document.querySelector('.webcam:checked').value;}
                        else { var webcam = 0;}
                        if(document.querySelector('.speakers:checked') != null) {var speakers = document.querySelector('.speakers:checked').value;}
                        else { var speakers = 0;}
                        if(document.querySelector('.air_con:checked') != null) {var air_con = document.querySelector('.air_con:checked').value;}
                        else { var air_con = 0;}



                        // console.log(faculty);
                        // console.log(capacity);
                        // console.log(lesson);
                        // console.log(blackboard);


                        $.ajax({
                            type: "POST",
                            dataType:'html',
                            url : "/check-timetable",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data:{
                                faculty: faculty,
                                capacity: capacity,
                                lesson_id:lesson,
                                blackboard:blackboard,
                                special_seats:special_seats,
                                proffessor_chair:proffessor_chair,
                                projector:projector,
                                smartboard:smartboard,
                                internet:internet,
                                pc:pc,
                                webcam:webcam,
                                speakers:speakers,
                                ac:air_con,
                            },
                            success : function (data) {
                                var result = JSON.parse(data);
                                console.log(result);
                                if(result.success === 1)
                                {
                                var classrooms = result.classrooms;
                                 /* Remove all options from the select list */
                                $('#classroom_selectlist').empty();
                                classrooms.forEach(function(element) {
                                    $('#classroom_selectlist').append(`<option value="${element.id}">
                                       ${element.title}
                                  </option>`);
                                })
                                    let timetable;
                                window.timetable = result.timetable;
                                                                   }
                                else
                                {
                                    $('#classroom_selectlist').empty();
                                }

                            }
                        });











                    }
                    if (e.getCurrentStepIndex() == 3) {
                        window.setformdetails();

                    }
                    console.log("validated!"), "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {confirmButton: "btn btn-light"}
                    }).then((function () {
                        KTUtil.scrollTop()
                    }))
                })) : (e.goNext(), KTUtil.scrollTop())
            })), r.on("kt.stepper.previous", (function (e) {
                console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
            })), a.push(FormValidation.formValidation(i, {
                fields: {account_type: {validators: {notEmpty: {message: "Account type is required"}}}},
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    account_team_size: {validators: {notEmpty: {message: "Time size is required"}}},
                    account_name: {validators: {notEmpty: {message: "Account name is required"}}},
                    account_plan: {validators: {notEmpty: {message: "Account plan is required"}}}
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    business_name: {validators: {notEmpty: {message: "Busines name is required"}}},
                    business_descriptor: {validators: {notEmpty: {message: "Busines descriptor is required"}}},
                    business_type: {validators: {notEmpty: {message: "Busines type is required"}}},
                    business_description: {validators: {notEmpty: {message: "Busines description is required"}}},
                    business_email: {
                        validators: {
                            notEmpty: {message: "Busines email is required"},
                            emailAddress: {message: "The value is not a valid email address"}
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    card_name: {validators: {notEmpty: {message: "Name on card is required"}}},
                    card_number: {
                        validators: {
                            notEmpty: {message: "Card member is required"},
                            creditCard: {message: "Card number is not valid"}
                        }
                    },
                    card_expiry_month: {validators: {notEmpty: {message: "Month is required"}}},
                    card_expiry_year: {validators: {notEmpty: {message: "Year is required"}}},
                    card_cvv: {
                        validators: {
                            notEmpty: {message: "CVV is required"},
                            digits: {message: "CVV must contain only digits"},
                            stringLength: {min: 3, max: 4, message: "CVV must contain 3 to 4 digits only"}
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), o.addEventListener("click", (function (e) {
                a[3].validate().then((function (t) {
                    console.log("validated!"), "Valid" == t ? (e.preventDefault(), o.disabled = !0, o.setAttribute("data-kt-indicator", "on"), setTimeout((function () {
                        o.removeAttribute("data-kt-indicator"), o.disabled = !1, r.goNext()
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {confirmButton: "btn btn-light"}
                    }).then((function () {
                        KTUtil.scrollTop()
                    }))
                }))
            })), $(i.querySelector('[name="card_expiry_month"]')).on("change", (function () {
                a[3].revalidateField("card_expiry_month")
            })), $(i.querySelector('[name="card_expiry_year"]')).on("change", (function () {
                a[3].revalidateField("card_expiry_year")
            })), $(i.querySelector('[name="business_type"]')).on("change", (function () {
                a[2].revalidateField("business_type")
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTCreateAccount.init()
}));
