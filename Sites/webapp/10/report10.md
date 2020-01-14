## DB-1　「test.db」の作成

## DB-2　テーブル「purchases」の作成
### テーブル作成
```
create table purchases(product text, manufacturer text, price integer, quantity integer);
insert into purchases values('Windows10', 'Microsoft', 35000, 3);
insert into purchases values('AdobePro', 'Adobe', 20000, 2);
insert into purchases values('Parallels', 'Apple', 15000, 1);
insert into purchases values('Office2019', 'Microsoft', 35000, 3);
insert into purchases values('AutiVirus2019', 'Symantec', 7000, 10);
```

### 結果
```
Windows10|Microsoft|35000|3
AdobePro|Adobe|20000|2
Parallels|Apple|15000|1
Office2019|Microsoft|35000|3
AutiVirus2019|Symantec|7000|10
```

### 変更
```
update purchases set price=21000 where product='Windows10';
update purchases set quantity=8 where product='Office2019';
delete from purchases where product='Parallels';
```

### 結果
```
Windows10|Microsoft|21000|3
AdobePro|Adobe|20000|2
Office2019|Microsoft|35000|8
AutiVirus2019|Symantec|7000|10
```

## DB-3 テーブル「stock」の作成
### テーブル作成
```
create table stock(product text, price integer, district text);
insert into stock values('apple', 100, 'Aomori');
insert into stock values('mikan', 120, 'Ehime');
insert into stock values('melon', 1500, 'Yubari');
insert into stock values('grape', 500, 'Yamanashi');
```

### 結果
```
apple|100|Aomori
mikan|120|Ehime
melon|1500|Yubari
grape|500|Yamanashi
```

## DB-4　以下のSQL文の実行
### 列の指定
```
select price from stock;
select product, district from stock;
```

### 条件の指定
```
select * from stock where price = 100;
select product from stock where price <= 150;
select * from stock where price >= 120 and price < 1500;
```

## DB-5　テーブル「stock」に対して任意のものを問い合わせる
### 問1答え
```
select product from stock where price=500;
```

### 問2答え
```
select product price from stock where district='Yubari';
```

### 問3答え
```
select product from stock where price >= 300 and district='Yamanashi';
```

### 問4答え
```
select avg(price) from stock where price <= 1000;
```

### 問5答え
```
select sum(price) from stock where price <= 150;
```

### 問6答え
```
select count(price) from stock where price <= 150;
```

### 問7の答え
```
select max(price) product from stock where price <= 300;
```

## DB-6　「welcom0.db」に対して任意のものを問い合わせる
### 問1の答え
```
select * from ranking where 1 <= rank and rank <= 10;
```

### 問2の答え
```
select * from ranking where money >= 10000000;]
```

### 問3の答え
```
select rank, name, money from ranking where nationality='Australia';
```

### 問4の答え
```
select rank, name, age from ranking where age >= 30;
```

### 問5の答え
```
select avg(money) from ranking;
```

### 問6の答え
```
select count(rank) from ranking;
```

### 問7の答え
```
select avg(age) from ranking where 1 <= rank and rank <= 10;
```

### 問8の答え
```
select max(money) from ranking where age >= 35;
```

### 問9の答え
```
select avg(money) from ranking where 20 <= rank and rank <= 29;
```
