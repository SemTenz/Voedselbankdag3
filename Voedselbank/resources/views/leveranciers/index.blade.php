<style>
    .blue-icon {
        color: blue; /* Kleur van het icoon blauw maken */
        display: flex;
        justify-content: center; /* Horizontaal centreren */
        align-items: center; /* Verticaal centreren */
        height: 100%; /* Volledige hoogte van de parent element */
    }
</style>


@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

@section('content')
    <div class="container" style="position: relative;">
        <h1 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem; color: #6aa84f; background-color: white; border-bottom: 2px solid black; padding: 10px;">Overzicht Leveranciers</h1>
        <div style="display: flex; justify-content: flex-end; margin-bottom: 1rem;"> <!-- Flex-container -->
            <form action="{{ route('leveranciers.index') }}" method="GET" style="display: flex; align-items: center;"> <!-- Flexbox voor form -->
                <div class="form-group" style="margin-right: 4rem;"> <!-- Margin toegevoegd aan dropdown -->
                    <select class="form-control" id="leverancier_type" name="leverancier_type">
                        <option value="SelecteerLeveranciertype">Selecteer Leveranciertype</option>
                        <option value="overheid">Overheid</option>
                        <option value="particulier">Particulier</option>
                        <option value="donor">Donor</option>
                        <option value="bedrijf">Bedrijf</option>
                        <option value="instelling">Instelling</option>
                    </select>
                </div>
                <button type="submit" style="margin-right: 4.5rem; background-color: grey; color: white; border-radius: 10px; padding: 10px 20px;" class="btn btn-primary">Toon Leveranciers</button>
            </form>
        </div>
        <div style="overflow-x: auto; margin-top: 20px;"> <!-- Verhoogde margin-top -->
            <table class="table table-bordered table-striped" style="width: 90%; margin: 0 auto;">
                <thead style="background-color: white; color: black;">
                    <tr>
                        <th scope="col" style="font-weight: bold; padding: 10px;">Naam</th>
                        <th scope="col" style="font-weight: bold; padding: 10px;">Contactpersoon</th>
                        <th scope="col" style="font-weight: bold; padding: 10px;">Contact Email</th>
                        <th scope="col" style="font-weight: bold; padding: 10px;">Contact Mobiel</th>
                        <th scope="col" style="font-weight: bold; padding: 10px;">Leverancier Nummer</th>
                        <th scope="col" style="font-weight: bold; padding: 10px;">Leverancier Type</th>
                        <th scope="col" style="font-weight: bold; padding: 10px;">Product Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leveranciers as $leverancier)
                        <tr>
                            <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $leverancier->naam }}</td>
                            <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $leverancier->contactpersoon }}</td>
                            @if ($leverancier->contact->isNotEmpty())
                                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $leverancier->contact->first()->Email }}</td>
                                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $leverancier->contact->first()->Mobiel }}</td>
                            @else
                                <td colspan="2" style="padding: 10px; border: 1px solid #dee2e6; color: red; text-align: center;">Niet beschikbaar</td>
                            @endif
                            <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $leverancier->leverancier_nummer }}</td>
                            <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $leverancier->leverancier_type }}</td>
                            <td style="padding: 10px; border: 1px solid #dee2e6;">
                            <a href="{{ route('leveranciers.products', $leverancier->id) }}" class="btn btn-sm btn-primary">
    <span class="blue-icon">
        <i class="fas fa-edit fa-icon"></i>
    </span>
</a>

                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        @if (isset($errorMessage))
                <div style="width: 90%; margin: 0 auto;background-color: #F3E2AF; border: 1px solid #c8b783; border-radius: 5px; text-align: center; padding: 15px; margin-top: 20px;">
                    {{ $errorMessage }}
                </div>
            @endif
        
        <a href="{{ route('home') }}" class="btn btn-primary" style="position: absolute; bottom: -55px; right: calc(5%); background-color: #2986cc; color: white; border-radius: 10px; padding: 10px 20px;">Home</a>
    </div>
@endsection
