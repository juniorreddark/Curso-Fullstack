from datetime import date, datetime

data_1 = date(year=2024,month=5,day=7)
data_2 = date(year=2024,month=5,day=8)

if data_1 < data_2:
    print("data_1 é anterior que a data_2")
else:
    print("data_1 não é anterior a data_2")
    