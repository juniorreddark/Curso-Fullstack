from django.shortcuts import render


# Create your views here.

def ViewIndex(request):
    return render(request, "index.html")

def ViewLogin(request):
    return render(request, "login.html")