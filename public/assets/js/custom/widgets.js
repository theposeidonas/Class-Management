"use strict";
var KTWidgets = function () {
    var t = function (t, e, i, a) {
        var o = document.querySelector(e);
        if (o) {
            var r = {
                series: [{name: "Profit", data: i}],
                chart: {
                    fontFamily: "inherit",
                    type: "bar",
                    height: parseInt(KTUtil.css(o, "height")),
                    toolbar: {show: !1}
                },
                plotOptions: {bar: {horizontal: !1, columnWidth: ["30%"], borderRadius: 4}},
                legend: {show: !1},
                dataLabels: {enabled: !1},
                stroke: {show: !0, width: 2, colors: ["transparent"]},
                xaxis: {
                    crosshairs: {show: !1},
                    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    axisBorder: {show: !1},
                    axisTicks: {show: !1},
                    labels: {style: {colors: KTUtil.getCssVariableValue("--bs-gray-400"), fontSize: "12px"}}
                },
                yaxis: {
                    crosshairs: {show: !1},
                    labels: {style: {colors: KTUtil.getCssVariableValue("--bs-gray-400"), fontSize: "12px"}}
                },
                states: {
                    normal: {filter: {type: "none", value: 0}},
                    hover: {filter: {type: "none"}},
                    active: {allowMultipleDataPointsSelection: !1, filter: {type: "none", value: 0}}
                },
                fill: {opacity: 1},
                tooltip: {
                    style: {fontSize: "12px"}, y: {
                        formatter: function (t) {
                            return "$" + t + "k"
                        }
                    }
                },
                colors: [KTUtil.getCssVariableValue("--bs-primary")],
                grid: {
                    borderColor: KTUtil.getCssVariableValue("--bs-gray-300"),
                    strokeDashArray: 4,
                    yaxis: {lines: {show: !0}}
                }
            }, s = new ApexCharts(o, r), n = !1, l = document.querySelector(t);
            !0 === a && (s.render(), n = !0), l.addEventListener("shown.bs.tab", (function (t) {
                0 == n && (s.render(), n = !0)
            }))
        }
    };
    return {
        init: function () {
            var e, i, a, o, r, s, n;
            (e = document.querySelector("#kt_user_menu_dark_mode_toggle")) && e.addEventListener("click", (function () {
                window.location.href = this.getAttribute("data-kt-url")
            })), function () {
                if ("undefined" != typeof FullCalendar && document.querySelector("#kt_calendar_widget_1")) {
                    var t = moment().startOf("day"), e = t.format("YYYY-MM"),
                        i = t.clone().subtract(1, "day").format("YYYY-MM-DD"), a = t.format("YYYY-MM-DD"),
                        o = t.clone().add(1, "day").format("YYYY-MM-DD"),
                        r = document.getElementById("kt_calendar_widget_1");
                    new FullCalendar.Calendar(r, {
                        headerToolbar: {
                            left: "prev,next today",
                            center: "title",
                            right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
                        },
                        height: 800,
                        contentHeight: 780,
                        aspectRatio: 3,
                        nowIndicator: !0,
                        now: a + "T09:25:00",
                        views: {
                            dayGridMonth: {buttonText: "month"},
                            timeGridWeek: {buttonText: "week"},
                            timeGridDay: {buttonText: "day"}
                        },
                        initialView: "dayGridMonth",
                        initialDate: a,
                        editable: !0,
                        dayMaxEvents: !0,
                        navLinks: !0,
                        events: [{
                            title: "All Day Event",
                            start: e + "-01",
                            description: "Toto lorem ipsum dolor sit incid idunt ut",
                            className: "fc-event-danger fc-event-solid-warning"
                        }, {
                            title: "Reporting",
                            start: e + "-14T13:30:00",
                            description: "Lorem ipsum dolor incid idunt ut labore",
                            end: e + "-14",
                            className: "fc-event-success"
                        }, {
                            title: "Company Trip",
                            start: e + "-02",
                            description: "Lorem ipsum dolor sit tempor incid",
                            end: e + "-03",
                            className: "fc-event-primary"
                        }, {
                            title: "ICT Expo 2017 - Product Release",
                            start: e + "-03",
                            description: "Lorem ipsum dolor sit tempor inci",
                            end: e + "-05",
                            className: "fc-event-light fc-event-solid-primary"
                        }, {
                            title: "Dinner",
                            start: e + "-12",
                            description: "Lorem ipsum dolor sit amet, conse ctetur",
                            end: e + "-10"
                        }, {
                            id: 999,
                            title: "Repeating Event",
                            start: e + "-09T16:00:00",
                            description: "Lorem ipsum dolor sit ncididunt ut labore",
                            className: "fc-event-danger"
                        }, {
                            id: 1e3,
                            title: "Repeating Event",
                            description: "Lorem ipsum dolor sit amet, labore",
                            start: e + "-16T16:00:00"
                        }, {
                            title: "Conference",
                            start: i,
                            end: o,
                            description: "Lorem ipsum dolor eius mod tempor labore",
                            className: "fc-event-primary"
                        }, {
                            title: "Meeting",
                            start: a + "T10:30:00",
                            end: a + "T12:30:00",
                            description: "Lorem ipsum dolor eiu idunt ut labore"
                        }, {
                            title: "Lunch",
                            start: a + "T12:00:00",
                            className: "fc-event-info",
                            description: "Lorem ipsum dolor sit amet, ut labore"
                        }, {
                            title: "Meeting",
                            start: a + "T14:30:00",
                            className: "fc-event-warning",
                            description: "Lorem ipsum conse ctetur adipi scing"
                        }, {
                            title: "Happy Hour",
                            start: a + "T17:30:00",
                            className: "fc-event-info",
                            description: "Lorem ipsum dolor sit amet, conse ctetur"
                        }, {
                            title: "Dinner",
                            start: o + "T05:00:00",
                            className: "fc-event-solid-danger fc-event-light",
                            description: "Lorem ipsum dolor sit ctetur adipi scing"
                        }, {
                            title: "Birthday Party",
                            start: o + "T07:00:00",
                            className: "fc-event-primary",
                            description: "Lorem ipsum dolor sit amet, scing"
                        }, {
                            title: "Click for Google",
                            url: "http://google.com/",
                            start: e + "-28",
                            className: "fc-event-solid-info fc-event-light",
                            description: "Lorem ipsum dolor sit amet, labore"
                        }]
                    }).render()
                }
            }(), i = document.getElementById("kt_lists_widget_3_chart"), a = KTUtil.getCssVariableValue("--bs-gray-500"), o = KTUtil.getCssVariableValue("--bs-gray-200"), r = KTUtil.getCssVariableValue("--bs-primary"), s = KTUtil.getCssVariableValue("--bs-info"), i && (parseInt(KTUtil.css(i, "height")), new ApexCharts(i, {
                series: [{
                    name: "Net Profit",
                    data: [40, 50, 65, 70, 50, 30]
                }, {name: "Revenue", data: [-30, -40, -55, -60, -40, -20]}],
                chart: {fontFamily: "inherit", type: "bar", stacked: !0, height: 350, toolbar: {show: !1}},
                plotOptions: {bar: {borderRadius: 8, horizontal: !1, columnWidth: ["12%"], borderRadius: 4}},
                legend: {show: !1},
                dataLabels: {enabled: !1},
                stroke: {show: !0, width: 2, colors: ["transparent"]},
                xaxis: {
                    categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                    axisBorder: {show: !1},
                    axisTicks: {show: !1},
                    labels: {style: {colors: a, fontSize: "12px"}}
                },
                yaxis: {min: -80, max: 80, labels: {style: {colors: a, fontSize: "12px"}}},
                fill: {opacity: 1},
                states: {
                    normal: {filter: {type: "none", value: 0}},
                    hover: {filter: {type: "none", value: 0}},
                    active: {allowMultipleDataPointsSelection: !1, filter: {type: "none", value: 0}}
                },
                tooltip: {
                    style: {fontSize: "12px"}, y: {
                        formatter: function (t) {
                            return "$" + t + " thousands"
                        }
                    }
                },
                colors: [r, s],
                grid: {borderColor: o, strokeDashArray: 4, yaxis: {lines: {show: !0}}}
            }).render()), function () {
                var t = document.getElementById("kt_mixed_widget_1_chart");
                if (t) {
                    var e = {
                        series: [t.getAttribute("data-kt-value")],
                        chart: {
                            fontFamily: "inherit",
                            height: parseInt(t.getAttribute("data-kt-height")),
                            type: "radialBar",
                            toolbar: {show: !1}
                        },
                        grid: {padding: {}},
                        plotOptions: {
                            radialBar: {
                                borderRadius: 4,
                                startAngle: -90,
                                endAngle: 90,
                                hollow: {margin: 0, size: "70%"},
                                dataLabels: {
                                    showOn: "always",
                                    name: {
                                        show: !0,
                                        fontFamily: "inherit",
                                        fontSize: "13px",
                                        fontWeight: 500,
                                        offsetY: -4,
                                        color: KTUtil.getCssVariableValue("--bs-gray-400")
                                    },
                                    value: {
                                        color: KTUtil.getCssVariableValue("--bs-info"),
                                        fontFamily: "inherit",
                                        fontSize: "30px",
                                        fontWeight: 700,
                                        offsetY: -40,
                                        show: !0
                                    }
                                },
                                track: {background: KTUtil.getCssVariableValue("--bs-light-info"), strokeWidth: "100%"}
                            }
                        },
                        colors: [KTUtil.getCssVariableValue("--bs-info")],
                        stroke: {lineCap: "round"},
                        labels: ["Doluluk Oranı"],
                        grid: {padding: {bottom: 0}}
                    };
                    new ApexCharts(t, e).render()
                }
            }(), function () {
                var t = document.getElementById("kt_mixed_widget_2_chart");
                if (t) {
                    var e = parseInt(KTUtil.css(t, "height"));
                    new ApexCharts(t, {
                        series: [{name: "Inflation", data: [2.3, 3.1, 4, 10.1, 4, 3.6, 3.2]}],
                        chart: {fontFamily: "inherit", height: e, type: "bar", toolbar: {show: !1}},
                        grid: {show: !1, padding: {top: 0, bottom: -5}},
                        plotOptions: {bar: {borderRadius: 10, dataLabels: {position: "top"}}},
                        dataLabels: {
                            enabled: !1, formatter: function (t) {
                                return t + "%"
                            }, offsetY: -20, style: {fontSize: "12px", colors: ["#304758"]}
                        },
                        xaxis: {
                            labels: {show: !1},
                            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                            position: "top",
                            axisBorder: {show: !1},
                            axisTicks: {show: !1},
                            crosshairs: {show: !1},
                            tooltip: {enabled: !1}
                        },
                        yaxis: {
                            show: !1, axisTicks: {show: !1}, labels: {
                                show: !1, formatter: function (t) {
                                    return t + "%"
                                }
                            }
                        },
                        title: {
                            text: "Monthly Inflation in Argentina, 2002",
                            floating: !0,
                            offsetY: 330,
                            align: "center",
                            style: {color: "#444"}
                        }
                    }).render()
                }
            }(), n = document.querySelectorAll(".statistics-widget-1-chart"), [].slice.call(n).map((function (t) {
                var e = parseInt(KTUtil.css(t, "height"));
                if (t) {
                    var i = t.getAttribute("data-kt-chart-color"), a = KTUtil.getCssVariableValue("--bs-gray-800"),
                        o = KTUtil.getCssVariableValue("--bs-" + i), r = KTUtil.getCssVariableValue("--bs-light-" + i);
                    new ApexCharts(t, {
                        series: [{name: "Net Profit", data: [30, 45, 32, 70, 40]}],
                        chart: {
                            fontFamily: "inherit",
                            type: "area",
                            height: e,
                            toolbar: {show: !1},
                            zoom: {enabled: !1},
                            sparkline: {enabled: !0}
                        },
                        plotOptions: {},
                        legend: {show: !1},
                        dataLabels: {enabled: !1},
                        fill: {type: "solid", opacity: .3},
                        stroke: {curve: "smooth", show: !0, width: 3, colors: [o]},
                        xaxis: {
                            categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                            axisBorder: {show: !1},
                            axisTicks: {show: !1},
                            labels: {show: !1, style: {colors: a, fontSize: "12px"}},
                            crosshairs: {
                                show: !1,
                                position: "front",
                                stroke: {color: "#E4E6EF", width: 1, dashArray: 3}
                            },
                            tooltip: {enabled: !0, formatter: void 0, offsetY: 0, style: {fontSize: "12px"}}
                        },
                        yaxis: {min: 0, max: 80, labels: {show: !1, style: {colors: a, fontSize: "12px"}}},
                        states: {
                            normal: {filter: {type: "none", value: 0}},
                            hover: {filter: {type: "none", value: 0}},
                            active: {allowMultipleDataPointsSelection: !1, filter: {type: "none", value: 0}}
                        },
                        tooltip: {
                            style: {fontSize: "12px"}, y: {
                                formatter: function (t) {
                                    return "$" + t + " thousands"
                                }
                            }
                        },
                        colors: [o],
                        markers: {colors: [o], strokeColor: [r], strokeWidth: 3}
                    }).render()
                }
            })), t("#kt_charts_widget_2_tab_1", "#kt_charts_widget_2_chart_1", [30, 40, 30, 25, 40, 45, 30, 20, 40, 25, 20, 30], !0), t("#kt_charts_widget_2_tab_2", "#kt_charts_widget_2_chart_2", [25, 30, 25, 45, 30, 40, 30, 25, 40, 20, 25, 30], !1)
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTWidgets.init()
}));
