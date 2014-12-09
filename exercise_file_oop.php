<?php
 /*Система учета продавцов и покупателей на сайте по продаже вещей 
 (продавец и покупатель могут иметь различные данные и выполнять разные операции)*/
 abstract class Users {
 	 public function getData () {

 	 }
 }
  class Guest extends Users {
 	
 }
 abstract class RegisterUser extends Users {
 	public login;
    public is_online;//online/offline
    private password;
    public email;
    public phone;

    public function getProfile (login) {

    }
    public function editProfile (login) {
      if(!this.isEditAllowen()) {
        return;
      }
      else {

      }
    }
    public function login (login, password) {

    }
    public function logout () {

    }
    public function register (data_array) {

    }
    public function comment (post) {

    }
   
    public function SellGoods (login,goodsId...) {
    	if(this.login!=login) {
    		return false;
    	else {
    		//производим продажу товара и удаляем его чтобы его уже не продали, так как товар имеет уникальный id
    		deleteGoods();
    	}
    }
    public function BuyGoods (login,goodsId...) { //продавец не может купить свой товар
    	if(this.login!=login) {
    		return false;
    		else {
    			//производим покупку товара и удаляем его чтобы никто больше не мог его купить, так как товар имеет уникальный id
    			deleteGoods();
    		}
    	}
    }
    public function addGoods (login,goodsId...) {
    	if(this.login!=login) {
    		return false;
    	}
    }
    public function editGoods (login,goodsId) {
    	if(this.login!=login) {
    		return false;
    	}
    }
    public function deleteGoods (login,goodsId) {
    	if(this.login!=login) {
    		return false;
    	}
    }
    public function PaidGoods (login,goodsId...) {

    }
    public function StatisticsGoods (login,goodsId...) { //учет сколько товаров у конкретного пользователя было продано или куплено

    }
 }

  class Admin extends RegisterUser {
  	protected function isEditAllowen (login) {
      return true;
    }
    public function addUser (login, password...){

    }
    public function deleteUser (login) {

    }
    public function addPost (data...) {

    }
    public function editPost (postId, data) {

    }
    public function deletePost (postId) {

    }
    public function addGoods (login,goodsId...) {
    	return true;
    }
    public function editGoods (postId, data) {
    	return true;
    }
    public function deleteGoods (login,goodsId) {
    	return true;
    }
  }  
  
  class Goods {
  	public goodsId;
  	public name;
  	public sezon;
  	public categoryGoods;
  	public brend;
  	public size;
  	public price;
  	public color;
  	public description;
  	public kol_vo;
  	public skidka;

   
  }
?>

    