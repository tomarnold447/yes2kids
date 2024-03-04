# views.py
from django.shortcuts import render
from .models import Patient, Event, Donor, SupportGroup, Research, NewsletterSubscription

def home(request):
    return render(request, 'yes2kids/index.html')

def about(request):
    return render(request, 'yes2kids/about.html')

def services(request):
    # Fetch data from the 'Patient' model (or use any other model you prefer)
    patients = Patient.objects.all()
    return render(request, 'yes2kids/services.html', {'patients': patients})

def events(request):
    # Fetch data from the 'Event' model
    events = Event.objects.all()
    return render(request, 'yes2kids/events.html', {'events': events})

def contact(request):
    return render(request, 'yes2kids/contact.html')
