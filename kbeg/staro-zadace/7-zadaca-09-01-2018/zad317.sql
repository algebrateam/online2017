SELECT pred.nazPred, orgjed.nazOrgjed FROM pred
JOIN orgjed ON pred.sifOrgjed=orgjed.sifOrgjed
WHERE pred.upisanoStud > 20;
