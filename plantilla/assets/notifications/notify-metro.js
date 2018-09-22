$.notify.addStyle("metro", {
    html:
        "<div>" +
            "<div class='image' data-notify-html='image'/>" +
            "<div class='text-wrapper'>" +
                "<div class='title' data-notify-html='title'/>" +
                "<div class='text' data-notify-html='text'/>" +
            "</div>" +
        "</div>",
    classes: {
        default: {
            "color": "#fafafa !important",
            "background-color": "#ABB7B7",
            "border": "1px solid #ABB7B7"
        },
        error: {
            "color": "#fafafa !important",
            "background-color": "rgba(213, 11, 0, 0.9)",
            "border": "1px solid rgba(144, 8, 0, 0.9)"
        },
        success: {
            "color": "#fafafa !important",
            "background-color": "rgba(0, 117, 0, 0.9)",
            "border": "1px solid rgba(0, 90, 0, 0.9)"
        },
        info: {
            "color": "#fafafa !important",
            "background-color": "rgba(41, 182, 246, 0.8)",
            "border": "1px solid #29b6f6"
        },
        warning: {
            "color": "#fafafa !important",
            "background-color": "rgba(255, 215, 64, 0.8)",
            "border": "1px solid #ffd740"
        },
        black: {
            "color": "#fafafa !important",
            "background-color": "rgba(33, 33, 33, 0.8)",
            "border": "1px solid #212121"
        },
        white: {
            "background-color": "#e6eaed",
            "border": "1px solid #ddd"
        }
    }
});