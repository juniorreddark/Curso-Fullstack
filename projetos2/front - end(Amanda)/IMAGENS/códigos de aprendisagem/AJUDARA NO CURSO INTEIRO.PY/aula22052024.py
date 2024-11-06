import requests
weather_ur = "https://wttr.in/Dubai"

try: 
    response = requests.get(weather_ur)
    data = response.text
    if response.status_code == 200:
        print(data) 
except Exception as e:
        print("Ocorreu um erro ao acessar o API")