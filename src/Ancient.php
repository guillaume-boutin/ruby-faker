<?php

namespace RubyFaker;

use Faker\Provider\Base;

class Ancient extends Base
{
    public function ancientGod()
    {
        return static::randomElement(["Aphrodite", "Apollo", "Ares", "Artemis", "Athena", "Demeter", "Dionysus", "Hades", "Hephaestus", "Hera", "Hermes", "Hestia", "Poseidon", "Zeus"]);
    }

    public function ancientPrimordial()
    {
        return static::randomElement(["Aion", "Aether", "Ananke", "Chaos", "Chronos", "Erebus", "Eros", "Hypnos", "Nesoi", "Uranus", "Gaia", "Ourea", "Phanes", "Pontus", "Tartarus", "Thalassa", "Thanatos", "Hemera", "Nyx", "Nemesis"]);
    }

    public function ancientTitle()
    {
        return static::randomElement(["Coeus", "Crius", "Cronus", "Hyperion", "Iapetus", "Mnemosyne", "Oceanus", "Phoebe", "Rhea", "Tethys", "Theia", "Themis", "Asteria", "Astraeus", "Atlas", "Aura", "Clymene", "Dione", "Helios", "Selene", "Eos", "Epimetheus", "Eurybia", "Eurynome", "Lelantos", "Leto", "Menoetius", "Metis", "Ophion", "Pallas", "Perses", "Prometheus", "Styx"]);
    }

    public function ancientHero()
    {
        return static::randomElement(["Abderus", "Achilles", "Aeneas", "Ajax", "Amphitryon", "Antilochus", "Bellerophon", "Castor", "Chrysippus", "Daedalus", "Diomedes", "Eleusis", "Eunostus", "Ganymede", "Hector", "Hercules", "Icarus", "Iolaus", "Jason", "Meleager", "Odysseus", "Orpheus", "Pandion", "Perseus", "Theseus", "Alcestis", "Amymone", "Andromache", "Andromeda", "Antigone", "Arachne", "Ariadne", "Atalanta", "Briseis", "Caeneus", "Cassandra", "Cassiopeia", "Clytemnestra", "Danaë", "Deianeira", "Electra", "Europa", "Hecuba", "Helen", "Hermione", "Iphigenia", "Ismene", "Jocasta", "Medea", "Medusa", "Niobe", "Pandora", "Penelope", "Phaedra", "Polyxena", "Semele", "Thrace"]);
    }
}