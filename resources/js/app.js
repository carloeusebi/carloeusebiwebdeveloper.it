import "./bootstrap";

import Alpine from "alpinejs";
import AlpineI18n from "alpinejs-i18n";
import it from "./lang/it";

window.Alpine = Alpine;

let locale = "en";

// the translation data
// you can load/fetch these from files or keep them hardcoded.
let messages = { it, en: {} };

// finally, pass them to AlpineI18n:
document.addEventListener("alpine-i18n:ready", function () {
    window.AlpineI18n.create(locale, messages);
});

Alpine.plugin(AlpineI18n);
Alpine.start();
