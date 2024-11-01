from datetime import datetime
data_atual = datetime.now()
data_formatada = data_atual.strftime("%d/%m/%Y,%H:M")
print("A data é:",data_formatada)