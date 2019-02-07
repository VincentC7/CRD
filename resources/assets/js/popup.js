alert("aaaa");


window.addEventListener("click", function () {
   document.getElementById("btnPopup").addEventListener("click", function () {
       alert("aaaa");
   })
});

function ouvrirPopup(message) {
    alert("Coucou");
    w=open("",'popup','width=400,height=200,toolbar=no,scrollbars=no,resizable=yes');
    w.document.write("<title>"+document.forms["f_popup"].elements["titre"].value+"</title>");
    w.document.write("<body> Bonjour "+document.forms["f_popup"].elements["nom"].value+"<br><br>");
    w.document.write("Ce popup n'est pas un fichier HTML, ");
    w.document.write("il est écrit directement par la fenêtre appelante");
    w.document.write("</body>");
    w.document.close();

}