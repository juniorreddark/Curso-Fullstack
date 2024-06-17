from django.urls import path
from .views import *

urlpatterns = [
    path("", ViewIndex),
    path("login", ViewLogin)
]
