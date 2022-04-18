# Syarah's Order Management System 
![unnamed](https://user-images.githubusercontent.com/71829413/163796308-55dfcff3-ff88-40cd-9d99-cfabdad186a7.png)
----------------------------------------------------------------------

## Directions to use the frontend app code:
1. **Install the latest composer packages:**
```
composer install
```
2. **clone the repository on your local desk then open the project directory**
```
git clone https://github.com/Marya-Alzubi/Syarah_Yii2_PHP_OrderManagementSystem_task
```
```
cd Syarah_Yii2_PHP_OrderManagementSystem_task
```
3. **setup the main-local.php file: (file Location: common -> config)**
```
change the database name to be matched with the name of youe database on phpMyAdmin
```
4. **Migrate and insert records**
```
php yii migrate
```
5. **in cmd write the below to open the app in the localhost server:**
```
php yii serve --docroot="frontend/web/"
```
6. **Happy Coding !!**

## Directions to use the API Versioning code:
**The same steps above but change step 5 to be:**
```
php yii serve --docroot="api/web/"
```
**To view v1/customers write in URL:**
shwoing as array of objects with the orders object for each customer.
```
http://localhost:8080/v1/customers
```
**To view v1/orders write in URL:**
shwoing as array of objects with the customer object for each order.
```
http://localhost:8080/v1/orders
```
.
.
.
.
## Images from the Frontend app:
**The Home page:**

![main-page](https://user-images.githubusercontent.com/71829413/153700776-7694e214-5955-4eb2-8ced-812b64ccec22.PNG)


**Customers Crud:**
![customers-index](https://user-images.githubusercontent.com/71829413/153700683-41339bce-a4c3-45bf-a275-bfd4b05f3ae3.PNG)

![customers-create](https://user-images.githubusercontent.com/71829413/153700691-9fb5d38c-13a8-40b8-8291-7eeb01c7923b.PNG)

![customers-create-error](https://user-images.githubusercontent.com/71829413/153700698-5ba29fa2-b704-47c1-95d4-764304c3aad0.PNG)

![customers-view](https://user-images.githubusercontent.com/71829413/153700703-5959b939-efbc-4440-a662-a82adbd32b1b.PNG)

![customers-update](https://user-images.githubusercontent.com/71829413/153700706-3bc3490a-960c-462b-95fd-11d646ae8814.PNG)

**Orders Crud:**
![orders-index](https://user-images.githubusercontent.com/71829413/153700725-1a7e5aa4-e799-4c3a-85ce-bfae4fbbed1c.PNG)

![orders-create](https://user-images.githubusercontent.com/71829413/153700735-8fe6c5d7-4b96-480d-900d-db6573752e44.PNG)

![orders-create-error1](https://user-images.githubusercontent.com/71829413/153700737-602638b7-29b9-423c-848a-eecb55c737e8.PNG)

![orders-create-error2](https://user-images.githubusercontent.com/71829413/153700738-9a56f3e9-7f7d-4e30-a7a3-84aaa40dc230.PNG)

![orders-view](https://user-images.githubusercontent.com/71829413/153700744-2fd6df58-c9ae-4bbb-8056-d17a99b9a73b.PNG)

![orders-update](https://user-images.githubusercontent.com/71829413/153700746-1160ffa1-524f-40ec-93e4-99366b21e82f.PNG)

## Images from the API Verioning:
**[v1/customers]  shwoing as array of objects with the orders object for each customer:**

![v1-customers](https://user-images.githubusercontent.com/71829413/153700818-b984dac8-af49-44c9-8a02-4e8482a127aa.PNG)

**[v1/orders] shwoing as array of objects with the customer object for each order:**

![v1-orders](https://user-images.githubusercontent.com/71829413/153700906-6b4789ef-4af4-4496-b123-10435d69948f.PNG)


