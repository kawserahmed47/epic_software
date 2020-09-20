<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Types 1 Question 1
         DB::table('questions')->insert([
            'types_id' => '1',
            'question_no' => '1.1',
            'question' => 'Members should demonstrate their commitment to supply chain security and the CTPAT Program through a statement of support. The statement should be signed by a senior company official and displayed in appropriate company locations.',
            'marks'=> 1,
            'status'=>1,
        ]);

         // Types 1 Question 2
         DB::table('questions')->insert([
            'types_id' => '1',
            'question_no' => '1.2',
            'question' => "<span class='text-danger'>Has the company incorporated representatives from all of the relevant departments into a cross-functional team.</span>",
            'marks'=> 1,
            'status'=>1,
        ]);

         // Types 1 Question 3
         DB::table('questions')->insert([
            'types_id' => '1',
            'question_no' => '1.3',
            'question' => 'The supply chain security program must be designed with, supported by, and implemented by an appropriate written review component.',
            'marks'=> 1,
            'status'=>1,
        ]);

         // Types 1 Question 4
         DB::table('questions')->insert([
            'types_id' => '1',
            'question_no' => '1.4',
            'question' => "<span class='text-danger'>The Company’s Point(s) of Contact (POC) to CTPAT must be 
            knowledgeable about CTPAT program requirements.</span>",
            'marks'=> 1,
            'status'=>1,
        ]);

         // Types 1 Question 5
         DB::table('questions')->insert([
            'types_id' => '1',
            'question_no' => '',
            'question' => 'Best Practice Observations',
            'marks'=> 1,
            'status'=>1,
        ]);








      // Types 2 Question 1
      DB::table('questions')->insert([
        'types_id' => '2',
        'question_no' => '2.1',
        'question' => 'Has the Members must conduct and document the amount of risk in their supply chains.  CTPAT members must conduct an overall risk assessment (RA) to identify where security vulnerabilities may exist.',
        'marks'=> 1,
        'status'=>1,
    ]);

     // Types 2 Question 2
     DB::table('questions')->insert([
        'types_id' => '2',
        'question_no' => '2.2',
        'question' => "The international portion of the risk assessment should document or map the movement of the Member’s cargo throughout its supply chain from the point of origin to the importer’s distribution center.",
        'marks'=> 1,
        'status'=>1,
    ]);

     // Types 2 Question 3
     DB::table('questions')->insert([
        'types_id' => '2',
        'question_no' => '2.3',
        'question' => 'Risk assessments must be reviewed annually, or more frequently as risk 
        factors dictate.',
        'marks'=> 1,
        'status'=>1,
    ]);

     // Types 2 Question 4
     DB::table('questions')->insert([
        'types_id' => '2',
        'question_no' => '2.4',
        'question' => "CTPAT Members should have written procedures in place that address crisis management, business continuity, security recovery plans, and business resumption.",
        'marks'=> 1,
        'status'=>1,
    ]);

     // Types 2 Question 5
     DB::table('questions')->insert([
        'types_id' => '2',
        'question_no' => '',
        'question' => 'Best Practice Observations',
        'marks'=> 1,
        'status'=>1,
    ]);










     // Types 3 Question 1
     DB::table('questions')->insert([
        'types_id' => '3',
        'question_no' => '3.1',
        'question' => 'Members must have a written, risk-based process for screening new business partners and for monitoring current partners. A factor that Members should include in this process is checks on activity related to money laundering and terrorist funding.',
        'marks'=> 1,
        'status'=>1,
    ]);

     // Types 3 Question 2
     DB::table('questions')->insert([
        'types_id' => '3',
        'question_no' => '3.4',
        'question' => "<span class='text-danger'>The business partner screening process must take into account whether a partner is a CTPAT Member or a member in an approved Authorized Economic Operator (AEO) program with a Mutual Recognition 
        Arrangement (MRA) with the United States (or an approved MRA). </span>",
        'marks'=> 1,
        'status'=>1,
    ]);

     // Types 3 Question 3
     DB::table('questions')->insert([
        'types_id' => '3',
        'question_no' => '3.5',
        'question' => "<span class='text-danger'>Where a CTPAT Member outsources or contracts elements of its supply chain, the Member must exercise due diligence (via visits, questionnaires, etc.) </span>",
        'marks'=> 1,
        'status'=>1,
    ]);

     // Types 3 Question 4
     DB::table('questions')->insert([
        'types_id' => '3',
        'question_no' => '3.6',
        'question' => 'If weaknesses are identified during business partners’ security assessments, they must be addressed as soon as possible, and corrections must be implemented in a timely manner. ',
        'marks'=> 1,
        'status'=>1,
    ]);

     // Types 3 Question 5
     DB::table('questions')->insert([
        'types_id' => '3',
        'question_no' => '3.7',
        'question' => 'Members should update their security assessments 
        of their business partners on a regular basis, or as circumstances/risks dictate.',
        'marks'=> 1,
        'status'=>1,
    ]);

     // Types 3 Question 6
     DB::table('questions')->insert([
        'types_id' => '3',
        'question_no' => '3.8',
        'question' => 'For inbound shipments to the United States, if a Member subcontracts transportation services to another highway carrier, the Member must use a CTPAT certified highway carrier or a highway carrier that works directly for the Member as delineated through a written contract.',
        'marks'=> 1,
        'status'=>1,
    ]);

    // Types 3 Question 7
    DB::table('questions')->insert([
        'types_id' => '3',
        'question_no' => '3.9',
        'question' => "<span class='text-danger'>CTPAT Members should have a documented social compliance program in place that, at a minimum, addresses how the company ensures goods imported into the United States were not mined, produced or manufactured,  with prohibited forms of labor,</span>",
        'marks'=> 1,
        'status'=>1,
    ]);

    // Types 3 Question 8
    DB::table('questions')->insert([
        'types_id' => '3',
        'question_no' => '',
        'question' => 'Best Practice Observations',
        'marks'=> 1,
        'status'=>1,
    ]);











    //Types 4 Question 1
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.1',
        'question' => "CTPAT Members must have comprehensive written cybersecurity policies and/or procedures to protect information technology (IT) systems.",
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 4 Question 2
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.2',
        'question' => "To defend Information Technology (IT) systems against common cybersecurity threats, a company must install sufficient software/hardware protection from malware (viruses, spyware, worms, Trojans, etc.) and internal / external intrusion (firewalls) in Members' computer 
        systems.",
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 4 Question 3
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.3',
        'question' => "CTPAT Members utilizing network systems must regularly test the security of their IT infrastructure.",
        'marks'=> 1,
        'status'=>1,
    ]);


      //Types 4 Question 4
      DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.4',
        'question' => "Cybersecurity policies should address how a Member shares information on cybersecurity threats with the government and other business partners.",
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 4 Question 5
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.5',
        'question' => "A system must be in place to identify unauthorized access of IT systems/data or abuse of policies and procedures including improper access of internal systems or external websites and tampering or altering of business data by employees or contractors.",
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 4 Question 6
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.6',
        'question' => "Cybersecurity policies and procedures must be reviewed annually, or 
        more frequently, as risk or circumstances dictate.",
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 4 Question 7
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.7',
        'question' => "User access must be restricted based on job description or assigned duties. Authorized access must be reviewed on a regular basis to ensure access to sensitive systems is based on job requirements",
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 4 Question 8
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.8',
        'question' => "Individuals with access to Information Technology (IT) systems must use individually assigned accounts. Access to IT systems must be protected from infiltration via the use of strong passwords, passphrases, or other forms of authentication and user access to IT systems must be safeguarded. ",
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 4 Question 9
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.9',
        'question' => "Members that allow their users to remotely connect to a network must employ secure technologies, such as virtual private networks (VPNs), to allow employees to access the company’s intranet securely when located outside of the office.",
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 4 Question 10
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.10',
        'question' => "If Members allow employees to use personal devices to conduct company work, all such devices must adhere to the company’s cybersecurity policies and procedures to include regular security updates and a method to securely access the company’s network.",
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 4 Question 11
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.11',
        'question' => "Cybersecurity policies and procedures should include measures to prevent the use of counterfeit or improperly licensed technological products.",
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 4 Question 12
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.12',
        'question' => "Data should be backed up once a week or as appropriate. All sensitive and confidential data should be stored in an encrypted format.",
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 4 Question 13
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '4.13',
        'question' => "All media, hardware, or other IT equipment that contains sensitive information regarding the import/export process must be accounted for through regular inventories.",
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 4 Question 14
    DB::table('questions')->insert([
        'types_id' => '4',
        'question_no' => '',
        'question' => "Best Practice Observations",
        'marks'=> 1,
        'status'=>1,
    ]);











    //Types 5 Question 1
    DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.1',
        'question' => "Conveyances and Instruments of International Traffic (IIT) must be stored in a secure area to prevent unauthorized access.",
        'marks'=> 1,
        'status'=>1,
    ]);


     //Types 5 Question 2
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.2',
        'question' => "<span class='text-danger'>The CTPAT inspection process must have written procedures for both security and agricultural inspections</span>",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 5 Question 3
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.3',
        'question' => "Prior to loading/stuffing/packing, all conveyances and empty Instruments of International Traffic must undergo CTPAT approved security and agricultural inspections to ensure their structures have not been modified to conceal contraband or have been contaminated with visible agricultural pests.",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 5 Question 4
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.4',
        'question' => "Conveyances and Instruments of International Traffic
        must be equipped with external hardware that can reasonably withstand attempts to remove it. ",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 5 Question 5
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.5',
        'question' => "The inspection of all conveyances and empty Instruments of International Traffic should be recorded on a checklist.",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 5 Question 6
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.6',
        'question' => "All security inspections should be performed in an area of controlled access and, if available, monitored via a CCTV system.",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 5 Question 7
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.7',
        'question' => "If visible pest contamination is found during the conveyance/Instruments of International Traffic inspection, washing/vacuuming must be carried out to remove such contamination. Documentation must be 
        retained for one year to demonstrate compliance with these inspection requirements.",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 5 Question 8
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.8',
        'question' => "Based on risk, management personnel should conduct random searches of conveyances after the transportation staff have conducted conveyance  / Instruments of International Traffic inspections.",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 5 Question 9
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.14',
        'question' => "CTPAT Members should work with their transportation providers to track conveyances from origin to final destination point.",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 5 Question 10
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.15',
        'question' => "Shippers should have access to their carrier's GPS fleet monitoring system, ",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 5 Question 11
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.16',
        'question' => "For land border shipments that are in proximity to the United States border, a “no-stop” policy should be implemented with regard to unscheduled stops.",
        'marks'=> 1,
        'status'=>1,
    ]);


     //Types 5 Question 12
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.24',
        'question' => "In areas of high risk, and immediately prior to arrival at the border crossing, CTPAT Members should incorporate a “last chance” verification process, including sal verifications.",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 5 Question 13
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.24',
        'question' => " Properly trained individuals should conduct the 
        inspections. VVTT",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 5 Question 14
     DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '5.29',
        'question' => "If a credible / detected threat to the security of a shipment or conveyance is discovered, the Member must alert any business partners in the supply chain.",
        'marks'=> 1,
        'status'=>1,
    ]);

      //Types 5 Question 15
      DB::table('questions')->insert([
        'types_id' => '5',
        'question_no' => '',
        'question' => 'Best Practice Observations',
        'marks'=> 1,
        'status'=>1,
    ]);









    
      //Types 6 Question 1
      DB::table('questions')->insert([
        'types_id' => '6',
        'question_no' => '6.1',
        'question' => 'Members must have detailed, written high security seal 
        procedures that describe how seals are issued and controlled at the facility and during transit.',
        'marks'=> 1,
        'status'=>1,
    ]);


     //Types 6 Question 2
     DB::table('questions')->insert([
        'types_id' => '6',
        'question_no' => '6.2',
        'question' => 'Shipments that can be sealed must be secured immediately after loading/stuffing/packing by the responsible party',
        'marks'=> 1,
        'status'=>1,
    ]);


     //Types 6 Question 3
     DB::table('questions')->insert([
        'types_id' => '6',
        'question_no' => '6.5',
        'question' => 'Members (that maintain seal inventories) must be able to 
        document the high security seals they use either meet or exceed the most current ISO 17712 standard.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 6 Question 4
     DB::table('questions')->insert([
        'types_id' => '6',
        'question_no' => '6.6',
        'question' => 'When a Member maintains an inventory of seals, company management or a security supervisor must conduct audits of seals that includes periodic inventory of stored seals and reconciliation against seal inventory logs 
        and shipping documents.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 6 Question 5
     DB::table('questions')->insert([
        'types_id' => '6',
        'question_no' => '6.7',
        'question' => "<span class='text-danger'>CTPAT’s seal verification process must be followed to ensure all high security seals (bolt/cable) have been affixed properly to Instruments of International Traffic, and are operating as designed. The procedure is 
        known as the VVTT process</span>",
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 6 Question 6
     DB::table('questions')->insert([
        'types_id' => '6',
        'question_no' => '',
        'question' => 'Best Practice Observations',
        'marks'=> 1,
        'status'=>1,
    ]);








     //Types 7 Question 1
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.1',
        'question' => 'When cargo is staged overnight, or for an extended period of time, measures must be taken to secure the cargo from unauthorized access.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 2
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.2',
        'question' => 'Cargo staging areas, and the immediate surrounding areas, must be inspected on a regular basis to ensure these areas remain free of visible pest contamination. ',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 3
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.4',
        'question' => 'The loading/stuffing of cargo into containers/IIT should be supervised by a security officer/manager or other designated personnel.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 4
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.5',
        'question' => 'As documented evidence of the properly installed seal, digital photographs should be taken at the point of stuffing',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 5
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.6',
        'question' => 'Procedures must be in place to ensure that all information used in the clearing of merchandise/cargo is legible, complete, accurate, protected against the exchange, loss, or introduction of erroneous information, and reported on time.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 6
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.7',
        'question' => 'If paper is used, forms and other import/export related documentation should be secured to prevent unauthorized use. ',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 7
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.8',
        'question' => 'The shipper or its agent must ensure that bill of ladings (BOLs) and/or manifests accurately reflect the information provided to the carrier.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 8
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.23',
        'question' => 'CTPAT Members must have written procedures for reporting an incident to include a description of the facility’s internal escalation process.',
        'marks'=> 1,
        'status'=>1,
    ]);


     //Types 7 Question 9
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.24',
        'question' => 'Procedures must be in place to identify, challenge, and address unauthorized/unidentified persons.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 10
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.24',
        'question' => ' Personnel must know the protocol 
        to challenge an unknown/unauthorized person, how to respond to the situation, and be familiar with the procedure for removing an unauthorized individual from the premises.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 11
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.25',
        'question' => 'Members should set up a mechanism to report security related issues anonymously.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 12
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.27',
        'question' => 'All shortages, overages, and other significant discrepancies or anomalies must be investigated and resolved, as appropriate.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 13
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.28',
        'question' => 'Arriving cargo should be reconciled against information on the cargo manifest. Departing cargo should be verified against purchase or delivery orders.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 14
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.29',
        'question' => 'Seal numbers assigned to specific shipments should be transmitted to the consignee prior to departure. ',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 15
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.30',
        'question' => 'Seal numbers should be electronically printed on the bill of lading or other shipping documents.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 16
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '7.30',
        'question' => 'Members must initiate their own internal investigations of any security-related incidents.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 7 Question 17
     DB::table('questions')->insert([
        'types_id' => '7',
        'question_no' => '',
        'question' => 'Best Practice Observations',
        'marks'=> 1,
        'status'=>1,
    ]);









     //Types 8 Question 1
     DB::table('questions')->insert([
        'types_id' => '8',
        'question_no' => '8.1',
        'question' => 'CTPAT Members must have written procedures designed to prevent visible pest contamination to include compliance with Wood Packaging Materials (WPM) regulations.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 8 Question 2
     DB::table('questions')->insert([
        'types_id' => '8',
        'question_no' => '8.1',
        'question' => 'Visible pest prevention measures must be adhered to throughout the supply chain.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 8 Question 3
     DB::table('questions')->insert([
        'types_id' => '8',
        'question_no' => '8.2',
        'question' => 'Are CIIT Inspections carried out',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 8 Question 4
     DB::table('questions')->insert([
        'types_id' => '8',
        'question_no' => '',
        'question' => 'Best Practice Observations',
        'marks'=> 1,
        'status'=>1,
    ]);










     //Types 9 Question 1
     DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.1',
        'question' => 'Are all cargo handling and storage facilities, including trailer yards and offices must have physical barriers and/or deterrents that prevent 
        unauthorized access.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 9 Question 2
     DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.4',
        'question' => 'Gates where vehicles and/or personnel enter or exit (as well as other points of egress) must be manned or monitored.',
        'marks'=> 1,
        'status'=>1,
    ]);

     //Types 9 Question 3
     DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.5',
        'question' => 'Private passenger vehicles should be prohibited from parking in or adjacent to cargo handling and storage areas, and conveyances.',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 9 Question 4
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.6',
        'question' => 'Adequate lighting must be provided inside and outside the facility  as appropriate.',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 9 Question 5
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.7',
        'question' => 'Security technology should be utilized to monitor premises and prevent unauthorized access to sensitive areas.',
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 9 Question 6
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.8',
        'question' => 'Members who rely on security technology for physical security must have written policies and procedures governing the use, maintenance, 
        and protection of this technology. ',
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 9 Question 7
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.9',
        'question' => 'CTPAT Members should utilize licensed/certified resources when considering the design and installation of security technology.',
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 9 Question 8
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.10',
        'question' => 'All security technology infrastructure must be physically secured from unauthorized access. ',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 9 Question 9
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.11',
        'question' => 'Security technology systems should be configured with an alternative power source that will allow the systems to continue to operate in the event of an unexpected loss of direct power. ',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 9 Question 10
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.12',
        'question' => 'If camera systems are deployed, cameras should monitor a facility’s premises and sensitive areas to deter unauthorized access.',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 9 Question 11
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.13',
        'question' => 'If camera systems are deployed, cameras must be positioned to cover key areas of facilities that pertain to the import/export process.',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 9 Question 12
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.14',
        'question' => 'If camera systems are deployed, cameras should have an alarm/notification feature, which would signal a “failure to pperate/record” condition.',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 9 Question 13
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.15',
        'question' => 'If camera systems are deployed, periodic, random reviews of the camera footage must be conducted',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 9 Question 14
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '9.16',
        'question' => 'If cameras are being used, recordings of footage covering key import/export processes should be maintained for a sufficient time for a monitored shipment to allow an investigation to be completed.',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 9 Question 15
    DB::table('questions')->insert([
        'types_id' => '9',
        'question_no' => '',
        'question' => 'Best Practice Observations',
        'marks'=> 1,
        'status'=>1,
    ]);











     //Types 10 Question 1
     DB::table('questions')->insert([
        'types_id' => '10',
        'question_no' => '10.1',
        'question' => 'CTPAT Members must have written procedures governing how identification badges and access devices are granted, changed, and 
        removed. ',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 10 Question 2
    DB::table('questions')->insert([
        'types_id' => '10',
        'question_no' => '10.2',
        'question' => 'Visitors, vendors, and service providers must present photo identification upon arrival, and a log must be maintained that records the 
        details of the visit.',
        'marks'=> 1,
        'status'=>1,
    ]);


    //Types 10 Question 3
    DB::table('questions')->insert([
        'types_id' => '10',
        'question_no' => '10.3',
        'question' => 'Drivers delivering or receiving cargo must be positively identified before 
        cargo is received or released.',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 10 Question 4
    DB::table('questions')->insert([
        'types_id' => '10',
        'question_no' => '10.4',
        'question' => 'A cargo pickup log must be kept to register drivers and record the 
        details of their conveyances when picking up cargo.',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 10 Question 5
    DB::table('questions')->insert([
        'types_id' => '10',
        'question_no' => '10.7',
        'question' => 'Prior to arrival, the carrier should notify the facility of the estimated time of arrival for the scheduled pick up, the name of the driver, and truck number. ',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 10 Question 6
    DB::table('questions')->insert([
        'types_id' => '10',
        'question_no' => '10.8',
        'question' => 'Arriving packages and mail should be periodically screened for 
        contraband before being admitted.',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 10 Question 7
    DB::table('questions')->insert([
        'types_id' => '10',
        'question_no' => '10.10',
        'question' => 'If security guards are used, work instructions for security guards 
        must be contained in written policies and procedures.',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 10 Question 8
    DB::table('questions')->insert([
        'types_id' => '10',
        'question_no' => '10.10',
        'question' => 'Management must periodically verify compliance and appropriateness with these procedures through audits and policy reviews.',
        'marks'=> 1,
        'status'=>1,
    ]);

    //Types 10 Question 9
    DB::table('questions')->insert([
        'types_id' => '10',
        'question_no' => '',
        'question' => 'Best Practice Observations',
        'marks'=> 1,
        'status'=>1,
    ]);










     //Types 11 Question 1
     DB::table('questions')->insert([
        'types_id' => '11',
        'question_no' => '11.1',
        'question' => 'Application information, such as employment history and references, must be verified prior to employment, to the extent possible and allowed under the law.',
        'marks'=> 1,
        'status'=>1,
    ]);

       //Types 11 Question 2
       DB::table('questions')->insert([
        'types_id' => '11',
        'question_no' => '11.2',
        'question' => 'In accordance with applicable legal limitations, and the availability of criminal record databases, employee background screenings should be conducted. Based on the sensitivity of the position, employee vetting requirements should extend to temporary workforce and contractors. ',
        'marks'=> 1,
        'status'=>1,
    ]);

       //Types 11 Question 3
       DB::table('questions')->insert([
        'types_id' => '11',
        'question_no' => '11.2',
        'question' => 'Once employed, periodic reinvestigations should be performed based on cause, and/or the sensitivity of the employee’s position.',
        'marks'=> 1,
        'status'=>1,
    ]);

       //Types 11 Question 4
       DB::table('questions')->insert([
        'types_id' => '11',
        'question_no' => '11.2',
        'question' => 'Employee background screening should include verification of the employee’s identity and criminal histor',
        'marks'=> 1,
        'status'=>1,
    ]);

       //Types 11 Question 5
       DB::table('questions')->insert([
        'types_id' => '11',
        'question_no' => '11.5',
        'question' => 'CTPAT Members must have an Employee Code of Conduct ',
        'marks'=> 1,
        'status'=>1,
    ]);

       //Types 11 Question 6
       DB::table('questions')->insert([
        'types_id' => '11',
        'question_no' => '',
        'question' => 'Best Practice Observations',
        'marks'=> 1,
        'status'=>1,
    ]);











        //Types 12 Question 1
        DB::table('questions')->insert([
            'types_id' => '12',
            'question_no' => '12.1',
            'question' => 'Members must establish and maintain a security training and awareness program to recognize and foster awareness of the security vulnerabilities to facilities, conveyances, and cargo at each point in the supply chain, which could be exploited by terrorists or contraband smugglers. ',
            'marks'=> 1,
            'status'=>1,
        ]);
         //Types 12 Question 2
         DB::table('questions')->insert([
            'types_id' => '12',
            'question_no' => '12.1',
            'question' => 'The training program must be comprehensive and cover all of CTPAT’s security requirements.',
            'marks'=> 1,
            'status'=>1,
        ]);

         //Types 12 Question 3
         DB::table('questions')->insert([
            'types_id' => '12',
            'question_no' => '12.1',
            'question' => 'Personnel in sensitive positions must receive additional specialized training geared toward the responsibilities that the position holds.',
            'marks'=> 1,
            'status'=>1,
        ]);

         //Types 12 Question 4
         DB::table('questions')->insert([
            'types_id' => '12',
            'question_no' => '12.1',
            'question' => 'Members must retain evidence of training such as training logs, sign in sheets (roster), or electronic training records. Training records should include the date of the training, names of attendees, and the topics of the training.',
            'marks'=> 1,
            'status'=>1,
        ]);

         //Types 12 Question 5
         DB::table('questions')->insert([
            'types_id' => '12',
            'question_no' => '12.2',
            'question' => 'Drivers and other personnel that conduct security and agricultural inspections of empty conveyances and Instruments of International Traffic (IIT) must be trained to inspect their conveyances/IIT for both security and agricultural purposes.',
            'marks'=> 1,
            'status'=>1,
        ]);

         //Types 12 Question 6
         DB::table('questions')->insert([
            'types_id' => '12',
            'question_no' => '12.4',
            'question' => 'CTPAT Members should have measures in place to verify that the training provided met all training objectives.',
            'marks'=> 1,
            'status'=>1,
        ]);

         //Types 12 Question 7
         DB::table('questions')->insert([
            'types_id' => '12',
            'question_no' => '12.8',
            'question' => "As applicable based on their functions and/or positions, personnel must be trained on the company's cybersecurity policies and procedures. This must include the need for employees to protect passwords / passphrases and computer access.",
            'marks'=> 1,
            'status'=>1,
        ]);


         //Types 12 Question 8
         DB::table('questions')->insert([
            'types_id' => '12',
            'question_no' => '12.9',
            'question' => 'Personnel operating and managing security technology systems must have received training in their operation and maintenance. ',
            'marks'=> 1,
            'status'=>1,
        ]);


         //Types 12 Question 9
         DB::table('questions')->insert([
            'types_id' => '12',
            'question_no' => '12.1',
            'question' => 'Personnel must be trained on how to report security incidents and suspicious activities.',
            'marks'=> 1,
            'status'=>1,
        ]);

            //Types 12 Question 10
            DB::table('questions')->insert([
                'types_id' => '12',
                'question_no' => '',
                'question' => 'Best Practice Observations',
                'marks'=> 1,
                'status'=>1,
            ]);










    }
}
