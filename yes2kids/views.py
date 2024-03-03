# views.py
from django.shortcuts import render
from .models import Patient, Event, Donor, SupportGroup, Research, NewsletterSubscription

def home(request):
    # Fetch data from models
    patients = Patient.objects.all()
    events = Event.objects.all()
    donors = Donor.objects.all()
    support_groups = SupportGroup.objects.all()
    research_items = Research.objects.all()
    subscriptions = NewsletterSubscription.objects.all()

    context = {
        'patients': patients,
        'events': events,
        'donors': donors,
        'support_groups': support_groups,
        'research_items': research_items,
        'subscriptions': subscriptions,
    }

    return render(request, 'yes2kids/index.html', context)
