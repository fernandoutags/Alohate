import {search} from'./export_search_cliente_reserva.js';
const mysearchc = document.querySelector("#mysearch");
const ul_add_lic = document.querySelector("#showlist");
const myurlc = "myurl";
const searchnum = new search(myurlc, mysearchc, ul_add_lic);
searchnum.InputSearch();
