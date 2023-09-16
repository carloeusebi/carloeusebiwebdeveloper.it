import Alpine from "alpinejs";
import intersect from "@alpinejs/intersect";

window.Alpine = Alpine;

const navLinks = [
    { name: "jumbo", label: "Home", icon: "home", solid: true },
    { name: "about", label: "About", icon: "user" },
    { name: "resumee", label: "Resumee", icon: "file" },
    { name: "portfolio", label: "Portfolio", icon: "folder-tree", solid: true },
    { name: "contact", label: "Contact", icon: "envelope" },
];

Alpine.data("data", () => ({
    open: false,
    activeLink: "jumbo",
    navLinks,
    scrollToSection(section) {
        const sectionToScrollTo = document.getElementById(section);
        sectionToScrollTo.scrollIntoView({ behavior: "smooth" });
        this.activeLink = section;
    },
}));

Alpine.plugin(intersect);
Alpine.start();
