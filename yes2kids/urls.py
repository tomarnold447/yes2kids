# yes2kids/urls.py
from django.urls import path
from .views import home, about, services, events, contact

urlpatterns = [
    path('', home, name='home'),
    path('about/', about, name='about'),
    path('services/', services, name='services'),
    path('events/', events, name='events'),
    path('contact/', contact, name='contact'),
]
 