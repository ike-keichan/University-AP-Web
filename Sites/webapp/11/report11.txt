## DB-7　テーブル「friends.db」に対して任意のものを問い合わせる
### 問1答え
```
select * from friends where lastname = "Okajima";
```

### 問2答え
```
select * from friends where firstname = "Hideki";
```

### 問3答え
```
select * from friends where state <> "MA";
```

### 問4答え
```
select * from friends where state = "CO" or state = "NY";
```

## DB-8　テーブル「friends.db」に対して任意のものを問い合わせる
### 問1の答え
```
select lastname, phone from friends where lastname like "M%";
```

### 問2の答え
```
select firstname, lastname, salary from friends where lastname like "%A";
```

### 問3の答え
```
select firstname, salary from friends where firstname like "K%";
```

### 問4の答え
```
select lastname, phone from friends where firstname like "%ki";
```

### 問5の答え
```
select firstname, lastname from friends where firstname like "T%" and state = "CA";
```

## DB-9　テーブル「friends.db」に対して任意のものを問い合わせる
### 問1の答え
```
select lastname, phone from friends where state = "MA" and salary >= 1000;
```

### 問2の答え
```
select firstname, lastname, salary from friends where state = "CA" or state = "NY";
```

## DB-10　テーブル「friends.db」に対して任意のものを問い合わせる
### 問1の答え
```
select lastname, state, phone from friends where state like "M%";
```

### 問2の答え
```
select * from friends where lastname like "M%a";
```

### 問3の答え
```
select * from friends where firstname like "T%" or lastname LIKE "O%";
```

### 問4の答え
```
select * from friends where lastname not like "W%" and salary >= 3000000 and state = "MA";
```

## DB-11　テーブル「golf.db」に対して任意のものを問い合わせる
### 問1の答え
```
select name, BD, sponsor from player, sponsor;
```

### 問2の答え
```
select name, SID, result from player, result;
```

### 問3の答え
```
select name, SID, result from player, result where result = 1;
```

### 問4の答え
```
select * from player, tournament, result where player.PID = result.PID and result.TID = tournament.TID;
```

## DB-12　テーブル「golf.db」に対して任意のものを問い合わせる
### 問1の答え
```
select name, tournament, result from player, sponsor, tournament, result;
```

### 問2の答え
```
select name, result from player, sponsor, tournament, result where BD = "6/19" and tournament = "Japan Open";
```

### 問3の答え
```
select avg(result) from player, sponsor, tournament, result where sponsor = "Suntory";
```

### 問4の答え
```
select * from player, sponsor, tournament, result where player.PID = result.PID and result.TID = tournament.TID;
```

### 問5の答え
```
select name, BD, sponsor, tournament, result from player, sponsor, tournament, result where player.PID = result.PID and result.TID = tournament.TID;
```
