from datetime import datetime

data_hora = datetime.now()


ano = data_hora.year
mes = data_hora.month
dia = data_hora.day
hora = data_hora.hour
minuto = data_hora.minute
segundo= data_hora.second

print(f'ano: {ano}')
print(f'mes: {mes}')
print(f'dia: {dia}')
print(f'hora: {hora}')
print(f'minuto: {minuto}')
print(f'segundo: {segundo}')
