<!-- Styles for both functions -->
<style>
#js-subnav, #emp-nav, #js-menu, #rs-subnav {
    display: none;
    z-index: 999;
    position: absolute;
    width: 100%;
}

#js-subnav, #rs-subnav {
    margin-top: 60px;
}

#nav-link:hover {
  text-decoration: underline;
}
</style>

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Script for both functions -->
<script>
$(document).ready(function() {
    // Job Seekers
    const jsButton = $("#js-button");
    const jsMenu = $("#js-menu");
    const profButton = $("#prof-button");
    const jsSubnav = $("#js-subnav");

    function toggleJsMenuDisplay(displayValue) {
        jsMenu.css("display", displayValue);
        jsButton.css("background-color", displayValue === "block" ? "#38b2bf" : "");
    }

    function profButtonHover() {
        jsSubnav.css("display", "block");
        toggleJsMenuDisplay("block");
        profButton.css("text-decoration", "underline");
    }

    function profButtonOut() {
        jsSubnav.css("display", "none");
        toggleJsMenuDisplay("block");
        profButton.css("text-decoration", "");
    }

    if (window.location.href.includes("send_cv") || window.location.href.includes("refer_a_friend") || window.location.href.includes("career_advice") || window.location.href.includes("professions")) {
        toggleJsMenuDisplay("block");

        profButton.hover(profButtonHover, profButtonOut);
        jsSubnav.hover(profButtonHover, profButtonOut);

        jsButton.hover(function() {
            toggleJsMenuDisplay("block");
        });

        jsMenu.hover(function() {
            toggleJsMenuDisplay("block");
        });
    } else {
        profButton.hover(profButtonHover, profButtonOut);
        jsSubnav.hover(profButtonHover, profButtonOut);

        jsButton.hover(function() {
          toggleJsMenuDisplay("block");
          if (empNav.css("display") === "block") {
              toggleEmpNavDisplay("none");
          }
        }, function() {
          toggleJsMenuDisplay("none");
          if (empNav.css("display") === "block") {
              toggleEmpNavDisplay("block");
          }
        });


        jsMenu.hover(function() {
            toggleJsMenuDisplay("block");
        }, function() {
            toggleJsMenuDisplay("none");
        });
    }

    // Employers
    const empButton = $("#emp-button");
    const empNav = $("#emp-nav");
    const rsButton = $("#rs-button");
    const rsSubnav = $("#rs-subnav");

    function toggleEmpNavDisplay(displayValue) {
        empNav.css("display", displayValue);
        empButton.css("background-color", displayValue === "block" ? "#38b2bf" : "");
    }

    function handleEmpHover() {
        rsSubnav.css("display", "block");
        toggleEmpNavDisplay("block");
        rsButton.css("text-decoration", "underline");
    }

    function handleEmpOut() {
        rsSubnav.css("display", "none");
        toggleEmpNavDisplay("block");
        rsButton.css("text-decoration", "");
    }

    if (window.location.href.includes("recruitment_services") || window.location.href.includes("our_expertise") || window.location.href.includes("locum") || window.location.href.includes("permanent")) {
        toggleEmpNavDisplay("block");

        rsButton.hover(handleEmpHover, handleEmpOut);
        rsSubnav.hover(handleEmpHover, handleEmpOut);

        empButton.hover(function() {
            toggleEmpNavDisplay("block");
        });

        empNav.hover(function() {
            toggleEmpNavDisplay("block");
        });
    } else {
        rsButton.hover(handleEmpHover, handleEmpOut);
        rsSubnav.hover(handleEmpHover, handleEmpOut);

        empButton.hover(function() {
          toggleEmpNavDisplay("block");
          if (jsMenu.css("display") === "block") {
              toggleJsMenuDisplay("none");
          }
        }, function() {
          toggleEmpNavDisplay("none");
          if (jsMenu.css("display") === "block") {
              toggleJsMenuDisplay("block");
          }
        });

        empNav.hover(function() {
            toggleEmpNavDisplay("block");
        }, function() {
            toggleEmpNavDisplay("none");
        });
    }
});
</script>
