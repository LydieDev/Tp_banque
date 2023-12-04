var btn_ajout=document.querySelector('.ajout');
var form=document.querySelector('.form');
var liste=document.querySelector('#table');
var bloc_ajout=document.querySelector('.bloc_ajout');
btn_ajout.addEventListener('click', function ajouter(){
    if (form.style.display=='none') {
        console.log('petit click');
        form.style.display='flex'
        liste.style.display='none'
        bloc_ajout.innerHTML='<i class="fa fa-table"></i>'
        
    } else {
        form.style.display='none'
        liste.style.display='flex'
        bloc_ajout.innerHTML='<i class="fa fa-plus"></i><span class="tooltips">Ajouter</span>'
        
    }
});

// var icone=document.querySelector('.drop_icone');
// var menu = document.querySelector('.sous-menu')
// icone.addEventListener('click',()=>{
//     if (menu.style.display=="none"){
//         menu.style.display='block'
//         icone.innerHTML='<i class="fa-solid fa-chevron-up"></i>'
//     }else{
//         menu.style.display='none'
//         icone.innerHTML='<i class="fa-solid fa-chevron-down"></i>'

//     }

// })
// var icone2=document.querySelector('.drop_icone2');
// var menu2 = document.querySelector('.sous-menu2')
// icone2.addEventListener('click',()=>{
//     if (menu2.style.display=="none"){
//         menu2.style.display='block'
//         icone2.innerHTML='<i class="fa-solid fa-chevron-up"></i>'
//     }else{
//         menu2.style.display='none'
//         icone2.innerHTML='<i class="fa-solid fa-chevron-down"></i>'

//     }

// })
// var icone3=document.querySelector('.drop_icone3');
// var menu3 = document.querySelector('.sous-menu3')
// icone3.addEventListener('click',()=>{
//     if (menu3.style.display=="none"){
//         menu3.style.display='block'
//         icone3.innerHTML='<i class="fa-solid fa-chevron-up"></i>'
//     }else{
//         menu3.style.display='none'
//         icone3.innerHTML='<i class="fa-solid fa-chevron-down"></i>'

//     }

// })
      
// var buton =document.getElementById('afficherListe');
// var block1 =document.getElementById('block1');
// var block3 =document.getElementById('block3');
//         var formulaire =document.getElementById('form');
//         var table =document.getElementById('table');
//         var btnHide =document.querySelector('.hide');
//         buton.addEventListener('click',function afficher(){
//           console.log('click');
//             if (table.style.display=='none') {
//                 table.style.display='block'
//                 formulaire.style.display='none'
//                 block1.style.display='none'
//                 block3.style.display='none'
//             } 
//         })
//         btnHide.addEventListener('click',function afficher(){
//           if (table.style.display=='block') {
//               table.style.display='none'
//               formulaire.style.display='block'
//               block1.style.display='block'
//               block3.style.display='block'
//           } 
//       })
//         var buton =document.getElementById('next');
//         var form1 =document.getElementById('form1');
//         var form2 =document.getElementById('form2');
//         buton.addEventListener('click',function afficher(){
//             if (form2.style.display=='none') {
//                 form2.style.display='block'
//                 form1.style.display='none'
//                 buton.innerHTML='Retour'
//             } 
//             else {
//                 form1.style.display='block'
//                 form2.style.display='none'
//                 buton.innerHTML='Suivant'

//             }
//         });

// var btn_ajout=document.querySelector('.ajout');
// var form=document.querySelector('.form');
// var liste=document.querySelector('#table');
// btn_ajout.addEventListener('click', function ajouter(){
//     if (liste.style.display=='block') {
//         console.log('petit click');
//         form.style.display='block'
//         liste.style.display='none'
//         btn_ajout.innerHTML='Voir la liste'
       
//     } 
// })
        